<?php

/* Include Dependencies */
require_once($_SERVER['DOCUMENT_ROOT'] . '/DevProject/libs/Smarty.class.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/DevProject/class/CourierHelper.php');

$courierHelper = new CourierHelper();

$smarty = new Smarty;

$smarty->compile_check = true;
//$smarty->debugging = true;


$smartyResultTypes = [];
foreach($courierHelper->GetShippingTypes() as $type) {
    array_push($smartyResultTypes, [$type['id'] => $type['name']]);
}


$smarty->assign('shipping_types', $smartyResultTypes);

$smarty->display('index.tpl');

?>
