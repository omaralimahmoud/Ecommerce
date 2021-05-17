<?php
require_once ("../../app.php");

use  TechStore\classes\validtion\validitor;
use  TechStore\classes\MODELS\Admin;


if ($reqest->postHas('submit') ) {
    $email=  $reqest->post('email');
    $password= $reqest->post('password');
    
    $validitor= new Validitor;
  
   
     $validitor->validate('email',$email, ['required','email','Max']);
     $validitor->validate('password',$password, ['required','Str','Max']);
   
    if ($validitor->hasErrors()) {
        $session->set("errors",$validitor->getErrors());
     $reqest->Ardirect("login.php");
        

    }else {
       $ad= new Admin;
     $isLogin=$ad->login($email,$password,$session);
     if ($isLogin) {
         $reqest->Ardirect('index.php');
     }else {
         $session->set('errors',['credentials are not correct']);
         $reqest->Ardirect('login.php');
     }

    }
  
     
  
   // $reqest->rdirect("products.php");
    
}else{
    $reqest->Ardirect("login.php");
}