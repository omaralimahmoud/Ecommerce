<?php
namespace TechStore\classes\MODELS;
use  TechStore\classes\db;
use TechStore\classes\session;
class   Admin  extends db
{
    public function __construct()
    {
           $this->table = "admins";
           $this->connect();
    }
    public function login(string $email ,string $password,session $session)
    {
        $sql="SELECT * FROM $this->table WHERE email = '$email' LIMIT 1 ";
        $result= mysqli_query($this->conn,$sql);
        $admins=mysqli_fetch_assoc($result);
        //return $admins;
         if (!empty($admins)) {
            $hasedpassword= $admins['password'];
           $isSam= password_verify($password,$hasedpassword);
             if ($isSam) {
                 $session->set('adminId',$admins['id']);
                 $session->set('adminName',$admins['name']);
                 $session->set('adminEmail',$admins['email']);
                 return true;
             }else {
                return false;
             }


         }else {
             return false;
         }
        }
            public function logOut(session $session)
            {
              $session->remove('adminId');
              $session->remove('adminName');
              $session->remove('adminEmail');
            }

}