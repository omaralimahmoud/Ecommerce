<?php

require_once ("../../app.php");
use  TechStore\classes\validtion\validitor;
use  TechStore\classes\MODELS\prodect;
use TechStore\classes\File;
$validitor= new Validitor;
$pr =new prodect;

if ($reqest->postHas('submit')) {
    $name = $reqest->post('name');
    $cat_id=  $reqest->post('cat_id');
    $price= $reqest->post('price');
    $picess_no=$reqest->post('picess_no');
    $desc=$reqest->post('desc');
    $img= $reqest->files('img');
    $id=$reqest->post('id');
   
  // validation
    
     $validitor->validate('name',$name, ['required','Str','Max']);
     $validitor->validate('cat_id',$cat_id, ['required','numeric']);
     $validitor->validate('price',$price, ['required','numeric']);
     $validitor->validate('picess_no',$picess_no, ['required','numeric']);
     $validitor->validate('desc',$desc, ['required','Str']);
     if ($img['error'] == 0) {
        $validitor->validate('img',$img, ['IMAG']);
     }
     


     /////////////////////////
     

    if ($validitor->hasErrors()) {
        $session->set("errors",$validitor->getErrors());
   //  $reqest->Ardirect("add-product.php");
     print_r($validitor->getErrors());
    
   
    }else {
     $pr=new prodect;
     $imgName= $pr->selectId($id, 'img')['img'];
      if ($img['error'] == 0) {
          unlink(PATH ."upload/$imgName");
          $file= new File($img);
          $imgName= $file->rename()->upload();

      }
      $pr->update("name='$name',`desc`='$desc',price='$price',picess_no='$picess_no',cat_id='$cat_id',img='$imgName'",$id);



     $session->set('success','profile edit successfully');
     $reqest->Ardirect('products.php');
    }
  
     
  
 $reqest->rdirect("products.php");
    
}else{
  $reqest->Ardirect("add-product.php");
}