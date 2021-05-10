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
}