<?php
  session_start();
include_once("..\class\db.class");
$base = new DB;



$login = $_POST['login'];
$pass  = $_POST['password'];
$items = $base->getAll("SELECT * FROM `users` WHERE users.name = '$login' and  users.password = '$pass' ");
$zap= count($items);
	if($zap == 1) 
		{
			$_SESSION['autor'] =1;		
			$_SESSION['name'] =$_POST['login'];
			echo 1;
		}
	else 
		{
			//echo "Пользователь с таким логином и паролем не найден";
			$_SESSION['autor'] =0;	
			//echo 0;
		};
		
/*		
echo "<pre>";
print_r($items);
echo "</pre>";
*/




?>


