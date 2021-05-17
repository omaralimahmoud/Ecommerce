<?php



require_once ("app.php");
use TechStore\classes\MODELS\OrderDetails;
$ordda= new OrderDetails ;
 $orderdatils=  $ordda->selectwithproducts(2);
echo '<pre>';
print_r($orderdatils);
echo '</pre>';