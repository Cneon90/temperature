<?php 
include_once("class\db.class");
$base = new DB;
//$id=$base->insert_sensor('houm','dom');//добавление датчика в таблицу sensor
//echo $id;


$title = "Сенсоры"; 
include_once("page\sensor.php");



?>