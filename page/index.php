<html>

<head>
	  <title> <?echo $title ?> </title>
	   <link href="..\css\bootstrap.css" rel="stylesheet" type="text/css">
	  <link href="..\css\style.css" rel="stylesheet" type="text/css">
	 
</head>

<body> 


	<div class="all">

		<div class="container">
		  <div class="row">
			<div class="col-12 centr">
				 Заголовок
				 <br>
				 <br>
				 <br>
				 <br>
			
				 <br>
			</div>
		   </div>
		   
		     <div class="row">
			<div class="col-12 right">
				Имя пользователя: <?php echo $user_name; ?>
				 
			</div>
		   </div>
		</div>	







			<div class="container">
				<div class="row">
					<div class="col-2">
							<br>
							Меню
							<br>
							<br>
							<?php echo $menu[0]; ?>
							<br>
							<?php echo $menu[1]; ?>
							<br>
							<?php echo $menu[2]; ?>
								<br>
								<br>
								<br>
								<br>
								<br>
								<br>
							Вход | Регистрация
					</div>
					
					<div class="col-10 ">

								<?php	//include_once("sensor.php");		?>
								<?php	include_once("data.php");		?>

				</div>

			</div>		
		</div>	

		  



		<div class="container">
		  <div class="row">
			<div class="col-12 centr">
			   Подвал
			  
			</div>
			</div>
			

		  
		</div>


	</div>

</body>

</html>