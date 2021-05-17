<?php
require_once ("../../app.php");
use  TechStore\classes\MODELS\prodect;
$pr= new prodect;
if ($reqest->getHas('id')) 
{
    $id=$reqest->get('id');
    $imgName= $pr->selectId($id,"img")['img'];
    unlink(PATH . "upload/$imgName");
    $pr->delet($id);
    $session->set('success','profile edit successfully');
     $reqest->Ardirect('products.php');
}