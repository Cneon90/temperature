<?php 
include_once("class\user.class");
include_once("class\db.class");
$base = new DB;
$user = new User;


if(isset($_SESSION['autor'])&&($_SESSION['autor'])==1) 
		{	
			$user_name=$user -> getUser($_SESSION['name']);
			$login=$user ->isUser();
		}







$items = $base->getAll("SELECT * FROM `sensor`");
$menu = $base->getAll("SELECT * FROM `menu`");
//echo  $_SESSION['user'];
//$id=$base->insert_sensor('houm','dom');//добавление датчика в таблицу sensor
//echo $id;


$title = "Сенсоры"; 
//include_once("page\sensor.php");

	
		
include_once("page\index.php");





?>