<?php
namespace TechStore\classes\validtion;
class Str implements validtionRule
{
    public function check(string  $name,$value)
    {
        if (! is_string($value)) {
            return "$name this is it input  must be string value";
        }
        return false;
    }
}
