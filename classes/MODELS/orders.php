<?php
namespace TechStore\classes\MODELS;
use TechStore\classes\db;

class orders extends db
{
    public function __construct()
    {
           $this->table = "orders";
           $this->connect();
    }
    public function select(string   $fields = "*") : array
    {
        $sql="SELECT $fields FROM $this->table JOIN order_details JOIN products 
        ON $this->table.id = order_details.order_id
        AND order_details.product_id=products.id 
        GROUP BY $this->table.id";
        $res=mysqli_query($this->conn,$sql);
        return mysqli_fetch_all($res,MYSQLI_ASSOC);
    }
    public function  selectId($id, string $fild = "*" )
    {
        $sql= "SELECT $fild FROM $this->table JOIN order_details JOIN products
        ON orders.id = order_details.order_id
        AND order_details.product_id=products.id 
          WHERE $this->table.id=$id";
        $res= mysqli_query($this->conn,$sql);
        return mysqli_fetch_assoc($res);
    }

   
}