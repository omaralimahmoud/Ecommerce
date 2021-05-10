<?php
namespace TechStore\classes\validtion;
class Max implements validtionRule
{
    public function check(string  $name ,$value)
    {
        if ( strlen($value)  > 255  ) {
            return "$name this is it input max lenth must be 255";
        }
        return false;
    }
}

