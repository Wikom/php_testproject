<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/DevProject/class/Database.php');

class Shipping {
    
    var $type;
    var $date;
    var $name;
    var $trackingId;
    var $size_h;
    var $size_l;
    var $size_w;
    var $weight;
    
    function __construct($type, $date, $name, $tackingId, $size_w, $size_h, $size_l, $weight) {
        $this->type = $type;
        $this->date = $date;
        $this->name = $name;
        $this->trackingId = $tackingId;
        $this->size_w = $size_w;
        $this->size_h = $size_h;
        $this->size_l = $size_l;
        $this->weight = $weight;
    }
    
    function save() {
        $database = new Database();
        
        // Query Build

        $result = pg_query_params($database->dbConnection, 
            'INSERT INTO shippings (type, tracking_id, customer_name, entry_date, size_height, size_length, size_width, weight)
                    VALUES ($1, $2, $3, $4, $5, $6, $7, $8)',
            [$this->type, $this->trackingId, $this->name, $this->date, $this->size_h, $this->size_l, $this->size_w, $this->weight]);
        
        if($result !== FALSE) {
            echo("Sendung an ".$this->name." wurde erfasst. Vorausichtliche Zustellung am ..., Preis: ...");
        }
        else {
            echo("Fehler in der Verarbeitung!");
        }
    }
}