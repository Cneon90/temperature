function hello()
{
	 
	 
	
}




function autor()
{
	 var login = $( "input[name=login]" ).val();
	 var pass = $( "input[name=password]" ).val();
				$.ajax({
				  type: 'POST',
				  url: 'api/autor.php',
				  data: 'login='+login+'&password='+pass,
				  success: function(data) {
					 if(data == 0) 
					 {$('.results').html("xyi");}
				 	 if(data == 1) 
					 {
						 $('.results').html("<h1>ok</h1>");
						 location.href = '?enter';

						}
				  }
				});
}



//Функция регистрации пользователей
function reg()
{
	 var login = $( "input[name=login]" ).val();
	 var pass = $( "input[name=password]" ).val();
	 var mail = $( "input[name=email]" ).val();
				$.ajax({
				  type: 'POST',
				  url: 'api/reg.php',
				  data: 'login='+login+'&password='+pass+'&email='+mail,
				  success: function(data) {
					 if(data == 1)
					 $('.results').html("Вы зарегистрированы");
				 	  if(data == 0)
					 $('.results').html("Вы не зарегистрированы");

						
				  }
				});
}