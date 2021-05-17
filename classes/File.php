<?php
namespace TechStore\classes;
class File
{
    protected $name,$tmpName,$uploadName;
    public function __construct(array $file)
    {
      $this->name=$file['name'];
      $this->tmpName=$file['tmp_name'];
    }
    public function rename()
    {
      $ext= pathinfo($this->name, PATHINFO_EXTENSION);
      $randomeStr= uniqid();
      $this->uploadName="$randomeStr. $ext";
      return $this;
    }
    public function setName($name)
    {
        $this->uploadName=$name;
        return $this;
    }
    public function upload()
    
      {
        $destination= PATH . "upload/" . $this->uploadName ;
        move_uploaded_file($this->tmpName, $destination);
        return $this->uploadName;
     } 
    
    
}