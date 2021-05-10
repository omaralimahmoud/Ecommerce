<?php
require_once ("../app.php");
use TechStore\classes\CArt;
use TechStore\classes\validtion\Validitor;
use  TechStore\classes\MODELS\OrderDetails;
use  TechStore\classes\MODELS\orders;

$orders= new orders;
$OrderDetailss= new OrderDetails;
$cart=new CArt;
if ($reqest->postHas('submit')) {
    $name= $reqest->post('name');
    $email=  $reqest->post('email');
    $phone= $reqest->post('phone');
    $address= $reqest->post('address');
    $validitor= new Validitor;
    $validitor->validate('name',$name, ['required','Str','Max']);
     if (!empty($email)) {
        $validitor->validate('email',$email, ['email','Max']);
     }
   
     $validitor->validate('phone',$phone, ['required','Str','Max']);

    if (!empty($address) ) {
        $validitor->validate('address',$address, ['Str','Max']);
    }
     
    if ($validitor->hasErrors()) {
        $session->set("errors",$validitor->getErrors());
     $reqest->rdirect("cart.php");
        

    }else {
     $orderId=   $orders->insertAndGetId("name,email,address,phone","'$name','$email','$address','$phone'");
       foreach ($cart->all() as $prodId => $prodData) {
           $qty= $prodData['qty'];
          $OrderDetailss->insert("order_id,product_id,qty","'$orderId','$prodId','$qty'");
       }
      $reqest->rdirect("products.php");
    }
  
     
  
   // $reqest->rdirect("products.php");
    
}