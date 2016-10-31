<?php 

//Charset
ini_set('default_charset','UTF-8');

$db = new mysqli($server, $user , $pass, $db);

if($db->connect_errno > 0){
    die('Unable to connect to database [' . $db->connect_error . ']');
}
$limite = 9;
$db->set_charset("utf8");



 ?>