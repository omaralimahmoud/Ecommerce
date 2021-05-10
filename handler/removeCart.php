<?php
require_once ("../app.php");
use TechStore\classes\CArt;
$cart= new CArt;
if ($reqest->getHas('id')) {
    $id=$reqest->get('id');
    $cart->remove($id);
    $reqest->rdirect("cart.php");
}