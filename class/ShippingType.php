<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/DevProject/class/Database.php');

class ShippingType {
    
    function getAll() {
        $database = new Database();
        $shipping_types = [];
        $query = 'Select * FROM shipping_types ORDER BY id';
        $result = pg_query($database->dbConnection, $query) or die('Abfrage fehlgeschlagen: ' . pg_last_error());
                
        while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
            array_push($shipping_types, $line);
        }
        
        return $shipping_types;
    }
    
}