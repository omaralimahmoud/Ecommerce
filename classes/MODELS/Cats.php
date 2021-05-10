<?php
namespace TechStore\classes\MODELS;
use  TechStore\classes\db;
class   Cats   extends db
{
    public function __construct()
    {
           $this->table = "cats";
           $this->connect();
    }
}