<?php
//$path=__DIR__ . "/";
define("PATH",__DIR__ . "/");
define("URL","http://localhost/lapmoppc1/");
define("DSERVERNAME","localhost");
define("DB_USERNAME","root");
define("DB_PASSWORD","");
define("DB_NAME","techcat");
//include classes
require_once ( PATH . "vendor/autoload.php");

use TechStore\classes\Request;
use TechStore\classes\session;

//object

 $reqest = new Request;
$session =new  session;























