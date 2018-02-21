<?php

/* Include Dependencies */
require_once($_SERVER['DOCUMENT_ROOT'] . '/DevProject/libs/Smarty.class.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/DevProject/class/Database.php');

$database = new Database();

$smarty = new Smarty;

$smarty->compile_check = true;
//$smarty->debugging = true;


$smarty->assign('shipping_types', $database->getShippingTypes());

$smarty->display('index.tpl');

?>
