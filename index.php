<?php 
include_once("class\db.class");
$base = new DB;
//$id=$base->insert_sensor('houm','dom');//добавление датчика в таблицу sensor

//echo $id;

$items = $base->getAll("SELECT * FROM `sensor`");
//echo "<pre>";
//print_r($items);
//echo "</pre>";

$i=0;


$title = "Главная"; 
include_once("page\sensor.php");



?>