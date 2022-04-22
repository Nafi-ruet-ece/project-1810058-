<?php
include "config.php";
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Chat system</title>
	<link rel="stylesheet" href="style.css" type="text/css" />
	<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
</head>
<body>
	<div class="centeralaised">
	<div class="chathistory"></div>
	<div class="chatbox">
		<form action="" method="post">
			<p>Type here</p>
		<textarea class="txtarea"id="message" name="message"></textarea>
		 <div class="signup_link">Not a member?<a href="login3.php">signout</a>
    </div>
		</form>

		
	</div>
</div>
<script>
	
	$(document).ready(function(){
			loadChat();
		});
	$('#message').keyup(function(e){
		var message= $(this).val();
		if(e.which == 13){
			$.post('handlers/ajax.php?action=SendMessage&message='+message,function(response){
				alert(response);
				loadChat();
					$('#message').val('');
			});
		}
	});
	
	
		function loadChat()
		{
			$.post('handlers/ajax.php?action=getChat', function(response){
				
				$('.chathistory').html(response);
			});
		}
			setInterval(function(){
			loadChat();
		}, 2000);
</script>
	
</body>
</html>