<?php
namespace TechStore\classes\validtion;
class Email implements validtionRule
{
    public function check(string  $name,$value)
    {
        if (! filter_var($value,FILTER_VALIDATE_EMAIL)) {
            return "$name this is it input must be valid email";
        }
        return false;
    }
}
