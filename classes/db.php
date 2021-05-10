<?php
namespace TechStore\classes;
abstract   class db
{

    protected $conn;
    protected $table;
    public function connect()
    {
        $this->conn = mysqli_connect(DSERVERNAME, DB_USERNAME, DB_PASSWORD, DB_NAME);
    }

    public function select(string   $fields = "*") : array
    {
        $sql="SELECT $fields FROM $this->table";
        $res=mysqli_query($this->conn,$sql);
        return mysqli_fetch_all($res,MYSQLI_ASSOC);
    }
     public function  selectId($id,   string $fild = "*"    )
     {
         $sql= "SELECT $fild FROM $this->table WHERE id =$id ";
         $res= mysqli_query($this->conn,$sql);
         return mysqli_fetch_assoc($res);
     }
     public function selectedWhere( $conds,  string $fild = "*"   ) : array
     {
        $sql= "SELECT $fild FROM $this->table WHERE $conds ";
        $res= mysqli_query($this->conn,$sql);
        return mysqli_fetch_all($res, MYSQLI_ASSOC);
    }

     
    public function getCount() :int 
    {
        $sql="  SELECT COUNT(*) AS CUNT FROM $this->table  ";
        $res= mysqli_query($this->conn , $sql);
        return   mysqli_fetch_assoc($res) ['CUNT'] ;
    }


    public function insert(   string $fild , string $Values   ) 
    {
        $sql="  INSERT INTO   $this->table ($fild) VALUES($Values) ";
      return  mysqli_query($this->conn , $sql);
    
    }

    public function insertAndGetId(   string $fild , string $Values   ) 
    {
        $sql="  INSERT INTO   $this->table ($fild) VALUES($Values) ";
            mysqli_query($this->conn , $sql);
       return  mysqli_insert_id($this->conn);
    
    }
    public function update($set,$id)
    {
        $sql="  UPDATE  $this->table SET $set WHERE id=$id ";
        return      $res= mysqli_query($this->conn , $sql);
      
    }

    public function delet($id)
    {
        $sql="  DELETE FROM  $this->table  WHERE id=$id ";
        return      $res= mysqli_query($this->conn , $sql);
      
    }

}
