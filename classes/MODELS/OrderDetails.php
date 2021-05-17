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
    public function selectwithproducts($orderId)
    {
        $sql= "SELECT qty,name,price FROM $this->table  JOIN products
        ON $this->table.product_id = products.id
        
          WHERE order_id=$orderId";
           $res=mysqli_query($this->conn,$sql);
           return mysqli_fetch_all($res,MYSQLI_ASSOC);

    }
     



 }
 