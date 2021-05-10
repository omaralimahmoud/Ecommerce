<?php
namespace TechStore\classes;
 class session
 {

   public function __construct()
   {
       if (session_status()==PHP_SESSION_NONE)
       {
           session_start();
       }
      
   }
 public function set (string $key,$value) {
   $_SESSION[$key]=$value;
    }

 public function haskey(string $key){
   return (isset($_SESSION[$key])) ? true : false;
   }

 public function get (string $key){
      if(isset($_SESSION[$key])) {
     return $_SESSION[$key];
      } else {
      return [];
      }
 }




 public function remove(string $key){
    unset($_SESSION[$key]);
      }
  
 
 public function destroy() {
     $_SESSION=[];
   session_destroy();
    }

 }
 