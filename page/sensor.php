<html>

<head>
  <title> <?echo $title ?> </title>
  <link href="css\style.css" rel="stylesheet" type="text/css">
</head>

<body> 

	<?php
	//Выводим все сенсоры через цикл
			foreach ($items as $key => $value) {
	?>

			 <div class="sensor"> 
	<?php
				 echo ($i+1).'.'.$items[$i]['name'].' <br> '.$items[$i]['alias'] ;
				 $i++;
				 echo "</div>";
				 
			  }
	?>



</body>

</html>