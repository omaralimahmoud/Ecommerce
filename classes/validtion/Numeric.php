<?php
namespace TechStore\classes\validtion;
class Numeric implements validtionRule
{
    public function check(string  $name,$value)
    {
        if (! is_numeric($value)) {
            return "$name this is it input  must be onley number value";
        }
        return false;
    }
}
