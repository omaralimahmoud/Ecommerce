<?php

require_once ("../../app.php");
use  TechStore\classes\validtion\validitor;
use  TechStore\classes\MODELS\prodect;
use TechStore\classes\File;
$validitor= new Validitor;
$pr =new prodect;

if ($reqest->postHas('submit') ) {
    $name = $reqest->post('name');
    $cat_id=  $reqest->post('cat_id');
    $price= $reqest->post('price');
    $picess_no=$reqest->post('picess_no');
    $desc=$reqest->post('desc');
    $img= $reqest->files('img');
    
  // validation
    
     $validitor->validate('name',$name, ['required','Str','Max']);
     $validitor->validate('cat_id',$cat_id, ['required','numeric']);
     $validitor->validate('price',$price, ['required','numeric']);
     $validitor->validate('picess_no',$picess_no, ['required','numeric']);
     $validitor->validate('desc',$desc, ['required','Str']);
     $validitor->validate('img',$img, ['requiredFile','IMAG']);


     /////////////////////////
     

    if ($validitor->hasErrors()) {
        $session->set("errors",$validitor->getErrors());
     $reqest->Ardirect("add-product.php");
     
    
   
    }else {
     $file=new File($img);
      $imgUploadName=$file->rename()->upload();
     $pr->insert("name,`desc`,price,img,picess_no,cat_id",
    "'$name','$desc','$price','$imgUploadName','$pieces_no','$cat_id'");
     $session->set('success','profile edit successfully');
     $reqest->Ardirect('products.php');
    }
  
     
  
   // $reqest->rdirect("products.php");
    
}else{
    $reqest->Ardirect("add-product.php");
}