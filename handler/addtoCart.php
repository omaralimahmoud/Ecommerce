<?php 
require_once ("../app.php");
use TechStore\classes\CArt;
if ($reqest->postHas('submit')) {
     $id= $reqest->post('id');
     $qty=  $reqest->post('qty');
     $name= $reqest->post('name');
     $img= $reqest->post('img');
     $price= $reqest->post('price');
     $prodData= [
          'qty'=> $qty,
          'name'=> $name,
          'price'=>$price,
          'img'=>$img,
     ];

   $cart=new CArt;
   $cart->add($id, $prodData);

     //echo $qty;
     echo   "<pre>";
     print_r($_SESSION);
     echo "</pre>";
     
     $reqest->rdirect("products.php");
}