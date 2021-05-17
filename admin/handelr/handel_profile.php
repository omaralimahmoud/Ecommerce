<?php
require_once ("../../app.php");

use  TechStore\classes\validtion\validitor;
use  TechStore\classes\MODELS\Admin;


if ($reqest->postHas('submit') ) {
    $name = $reqest->post('name');
    $email=  $reqest->post('email');
    $password= $reqest->post('password');
    $ConfrimPassword=$reqest->post('ConfrimPassword');
    $validitor= new Validitor;
  
   
     $validitor->validate('email',$email, ['required','email','Max']);
   
      if (!empty($password) and $password == $ConfrimPassword) {
          $validitor->validate('password',$password, ['required','Str','Max']);
      }

    if ($validitor->hasErrors()) {
        $session->set("errors",$validitor->getErrors());
     $reqest->Ardirect("profile.php");
     
    

    }else {
       $ad= new Admin;
     
     if (!empty($password)) {
        $hashpassword=password_hash($password,PASSWORD_DEFAULT);
        $ad->update("name= '$name',email='$email',`password`='$hashpassword'",$session->get('adminId'));
     }else {
        $ad->update("name= '$name',email='$email'",$session->get('adminId'));
       
     }
     $session->set('success','profile edit successfully');
     $reqest->Ardirect('handelr/handel_Logout.php');
    }
  
     
  
   // $reqest->rdirect("products.php");
    
}else{
    $reqest->Ardirect("login.php");
}