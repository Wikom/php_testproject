<?php

require 'Database.php';

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
        $query = ('INSERT INTO shippings (type, tracking_id, customer_name, entry_date, size_height, size_length, size_width, weight)
                    VALUES ('.$this->type.', '.$this->trackingId.', '.$this->name.', '.$this->date.', '.$this->size_h.',
                            '.$this->size_l.', '.$this->size_w.', '.$this->weight.')');
        
        $database->dbConnection();
        pg_query($query);
    }
}