<html>

<head>
  <title> <?echo $title ?> </title>
  <link href="css\style.css" rel="stylesheet" type="text/css">
</head>

<body> 

	<?php
	//Выводим все сенсоры через цикл
		$items = $base->getAll("SELECT * FROM `sensor`");
		
			foreach ($items as $key => $value) {
	?>

			 <div class="sensor"> 
	<?php
				 echo '.'.$items[$key]['name'].' <br> '.$items[$key]['alias'] ;
				
				 echo "</div>";
				 
			  }
	?>



</body>

</html>