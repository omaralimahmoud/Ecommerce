<?php 
namespace TechStore\classes\validtion;
class Validitor 
{
    protected $errors =[];
    public function validate( string $name, $value, array $rules)
    {
        foreach ( $rules  as $rule) {
          $className= "TechStore\\classes\\validtion\\" . $rule;
          $obj =new $className;



           $error=$obj->check($name,$value);
           if (! $error   == false) {
                $this->errors[]=$error;
                 break;
           }


        }
    }


    public function getErrors() :array
    {
        return $this->errors;
    }
   public function hasErrors() : bool
   {
      return  !empty($this-> errors);
           
       
   }



}