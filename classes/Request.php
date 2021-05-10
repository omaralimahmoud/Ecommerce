<?php
 namespace TechStore\classes;

class Request
{
    public function get(string $key)
    {
        return   $_GET[$key];
    }
    public function post(string   $key)
    {
        return   $_POST[$key];
    }
     public function postClean(string   $key)
     {
       return   trim( htmlspecialchars($_POST[$key]));
    }              
     
     



    public function getHas(string   $key)  : bool
    {
        if (isset($_GET[$key])) {
            return true;
        } else {
            return false;
        }
    }

    public function postHas(string   $key) :bool
    {
        if (isset($_POST[$key])) {
            return true;
        } else {
            return false;
        }
    }

    public function rdirect($path)
    {
        header("location:" . URL . $path);
    }
}
