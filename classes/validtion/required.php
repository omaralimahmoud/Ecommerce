<?php
namespace TechStore\classes\validtion;
class required implements validtionRule
{
    public function check(string  $name,$value)
    {
        if (empty($value)) {
            return "$name this is it input  is required";
        }
        return false;
    }
}
