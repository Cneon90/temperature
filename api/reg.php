<?php
session_start();
include_once("..\class\db.class");
$base = new DB;

$login = $_POST['login'];
$pass  = $_POST['password'];
$email  = $_POST['email'];

$id=$base->insert_user($login,$pass,$email);//добавление usera в таблицу user

if($id !=0) 
	echo 1;
else echo 0;
?>


