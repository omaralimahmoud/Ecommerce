<?php
namespace TechStore\classes;
class CArt 
{
  public function add(string $id  , array $prodData )
  {
   $_SESSION['cart'][$id]=$prodData;
  }
  public function countt() 
  {
    if (isset($_SESSION['cart'])) {
      return count($_SESSION['cart']);
    }
      
  }
  
   public function Totel()
   {
        if (isset($_SESSION['cart'])) {
          $totel=0;
       foreach ($_SESSION['cart'] as $id => $prodData) {
        $totel+=$prodData['qty'] * $prodData['price'];
      
       }
       return $totel;
        }
       

   }
   public function has(string  $id) : bool
   {
      if (isset($_SESSION['cart'])) {
        return  array_key_exists($id, $_SESSION['cart']);
      }
       else
       {
         return false;
       }
   }

     public function all() 
     {
      if (isset($_SESSION['cart'])) {
      return $_SESSION['cart'];
      }
    
     }
     public function remove(string $id)
     {
       if (isset($_SESSION['cart'])) {
           unset($_SESSION['cart'][$id]);
       }
     }
     
     
     
   
}