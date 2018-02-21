<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/DevProject/configs/database.php');

class Database {
    
    /**
     * Database Connection Object
     * @var PGConnection
     */
    public $dbConnection;
    
    function __construct() {
        $this->dbConnection = pg_connect("  host=".DB_HOST."
                        dbname=".DB_NAME."
                        user=".DB_USER."
                        password=".DB_PASSWORD."")
                        or die('Verbindungsaufbau fehlgeschlagen: ' . pg_last_error());
    }
    
    
    /**
     * Gets Shipping Types
     * @return array(id, name)
     */
    function getShippingTypes() {
        
        $shipping_types = array();
        
        $query = 'Select * FROM shipping_types ORDER BY id';
        $result = pg_query($query) or die('Abfrage fehlgeschlagen: ' . pg_last_error());
        
        while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
            array_push($shipping_types, array($line['id'] => $line['name']));
        }
        
        return $shipping_types;
    }
}
