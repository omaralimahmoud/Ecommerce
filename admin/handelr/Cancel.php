<?php
require ("../../app.php");
use TechStore\classes\MODELS\orders;
$ord=new orders;
if ($reqest->getHas('id')) {
    $id= $reqest->get('id');
    $ord->update("status= 'canceled'",$id);
    $session->set('success','order canceled');
    $reqest->Ardirect("order.php?id=".$id);
}