<?php
require_once ("../../app.php");
use  TechStore\classes\MODELS\Admin;
$ad= new Admin;
$ad->logOut($session);
$reqest->Ardirect("login.php");