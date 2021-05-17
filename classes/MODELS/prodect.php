<?php
namespace TechStore\classes\MODELS;
use TechStore\classes\db;
class prodect extends db
{
 public function __construct()
 {
      $this->table='products' ;
      $this->connect();
 }

 public function  selectId($id, string $fild = "products.*" )
 {
     $sql= "SELECT $fild FROM $this->table JOIN cats 
     ON $this->table.cat_id=cats.id 
     WHERE $this->table.id =$id";
     $res= mysqli_query($this->conn,$sql);
     return mysqli_fetch_assoc($res);
 }

 public function select(string  $fields = "*") : array
 {
     $sql="SELECT $fields FROM $this->table JOIN cats
      ON $this->table.cat_id=cats.id
      ORDER BY $this->table.id DESC";
     $res=mysqli_query($this->conn,$sql);
     return mysqli_fetch_all($res, MYSQLI_ASSOC);
 }
}