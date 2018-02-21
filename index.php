<?php

/* Include Dependencies */
require 'libs/Smarty.class.php';
require 'class/Database.php';

$database = new Database();

$smarty = new Smarty;

$smarty->compile_check = true;
//$smarty->debugging = true;


$smarty->assign('shipping_types', $database->getShippingTypes());

$smarty->display('index.tpl');

?>
