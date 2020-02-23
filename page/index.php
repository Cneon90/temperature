<html>

<head>
	  <title> <?echo $user_name; ?> </title>
	   <link href="..\css\bootstrap.css" rel="stylesheet" type="text/css">
	   <link href="..\css\style.css" rel="stylesheet" type="text/css">
	   <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	  <script src="..\js\jquery.js"></script> 
	   <script src="..\js\script.js"></script> 
</head>

<body> 

   
	<div class="all polo">
			
		   <?php 
		     if(isset($_GET['put']))
			 {
		   	  $put = 'page\\'.$_GET['put'].'.php';	
			 }
			 if(isset($_GET['put']) && file_exists($put))
			 {
				include_once($put);
			 } else 
			     include_once('page\one.php');
			
			 
			 ?>
</div>
	

</body>

</html>