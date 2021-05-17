<?php
namespace TechStore\classes\validtion;
class requiredFile implements validtionRule
{
    public function check(string  $name,$value)
    {
        if ($value['error'] != 0) {
            return "$name this is it input  is required";
        }
        return false;
    }
}