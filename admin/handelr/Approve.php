<?php
require ("../../app.php");
use TechStore\classes\MODELS\orders;
$ord=new orders;
if ($reqest->getHas('id')) {
    $id= $reqest->get('id');
    $ord->update("status= 'approved'",$id);
    $session->set('success','order approved');
    $reqest->Ardirect("order.php?id=".$id);
}