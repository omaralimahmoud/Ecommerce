<?php 
namespace TechStore\classes\validtion;
interface  validtionRule
{
    public function check(string  $name,$value);
}