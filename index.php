<?php 
include_once("class\user.class");
include_once("class\db.class");
$base = new DB;
$user = new User;

$user_name=$user -> getUser("kirill");
$login=$user ->isUser();

if(!$login) 
{
	echo "Не авторизован";
	return;
}
//echo  $_SESSION['user'];
//$id=$base->insert_sensor('houm','dom');//добавление датчика в таблицу sensor
//echo $id;


$title = "Сенсоры"; 
//include_once("page\sensor.php");

$menu = array("Главная","Настройки","Статистика");
		
		
		
include_once("page\index.php");





?>