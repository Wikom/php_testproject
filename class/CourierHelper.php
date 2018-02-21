<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/DevProject/class/Database.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/DevProject/class/ShippingType.php');

class CourierHelper {
    
    var $shippingTypes = [];
    
    function __construct() {
        $this->LoadTypes();
    }
    
    function LoadTypes() {
        $shippingType = new ShippingType();
        $this->shippingTypes = $shippingType->getAll();
    }
    
    function GetShippingTypes() {
        if(empty($this->shippingTypes)) $this->LoadTypes();
        return $this->shippingTypes;
    }
    
}