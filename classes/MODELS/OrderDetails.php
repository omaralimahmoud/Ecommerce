 <?php
 namespace TechStore\classes\MODELS;
 use  TechStore\classes\db;
 class OrderDetails extends db
 {
     public function __construct()
     {
            $this->table = "order_details";
            $this->connect();
     }
 }