<?php

require '../class/Shipping.php';

// Prepare ajax endoint
if($_GET["action"] && $_GET["action"] == "submit") {
    
    /*
     *          type: $('#types').val(),
    			date: $('#datepicker').val(),
    			tracking: $('#trackingid').val(),
    			deliveryname: $('#deliveryname').val(),
    			size_l: $('#size_l').val(),
    			size_w: $('#size_w').val(),
    			size_h: $('#size_h').val(),
    			weight: $('#weight').val(),
     */
    
    $type = $_POST['type'];
    $date = $_POST['date'];
    $tracking = $_POST['tracking'];
    $deliveryname = $_POST['deliveryname'];
    $size_l = $_POST['size_l'];
    $size_w = $_POST['size_w'];
    $size_h = $_POST['size_h'];
    $weight = $_POST['weight'];
    
    // All required Fields filled
    if(!$type || !$date || !$tracking || !$deliveryname || !$size_l || !$size_w || !$size_h || !$weight) {
        die("Sie m&uuml;ssen alle Felder ausf&uuml;llen!");
    }
    
    // TODO: Validate Fields 
    
    // Save to DB
    $shipping = new Shipping($type, $date, $deliveryname, $tracking, $size_w, $size_h, $size_l, $weight);
    
    //TODO: Check Type, insert deliverydate
    
    $shipping->save();
    
}