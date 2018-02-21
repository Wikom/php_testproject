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
}
