<?php
namespace TechStore\classes\validtion;
class IMAG implements validtionRule
{
    public function check(string  $name,$value)
    {
        $allowedExt=['png','jpg','jpeg','gif'];
        $ext=pathinfo($value['name'],PATHINFO_EXTENSION);
        if (! in_array($ext,$allowedExt)) {
            return "$name extenstion is not allowed ,please upload jpg,png,gif,jpeg ";
        }
        return false;
    }
}