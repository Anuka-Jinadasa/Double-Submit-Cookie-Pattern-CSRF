<?php

require_once 'token.php';

$token_value = $_POST['token'];
?>
		<?php
			if(Token::checkToken($token_value,$_COOKIE['CSRFtoken']))
				{
					$fname = $_POST['fname'];
					$lname = $_POST['lname'];
					$email = $_POST['email'];
					$uni = $_POST['university'];
					$phno = $_POST['phno'];
         		
					//echo "<br>The cookie token via AJAX call : ".$token_value;
					//echo "<br>The cookie token from the browser : ".$_COOKIE['CSRFtoken']. "<br><br>";
				}
			
				else 
				{
					$errors['err'] = "Server request fail! Unauthorized request! \n <br>";
				}

		?>			

<html>

	<head>
		<title>Updated WS 2</title>
		<link rel="stylesheet" href="css/update.css">
		<script src="https://kit.fontawesome.com/973cebd43f.js" crossorigin="anonymous"></script>
	</head>
	
	<body>
		
		<div class = "box">
			<h1>Profile Updated</h1>
			<img src ="css/a.png" class = "avatar">
		
			<div>
				<?php if(isset($errors['err'])) echo "<p class = 'para'>",$errors['err'],"</p>"; else echo "<p class = 'para'>Server Request Accepted</p>";?>
				 	
			</div>
			<div>
				<p class ="para1"><?php if(isset ($fname)) echo $fname. " ",$lname; ?>
			
			</div>
			<div>
				<p class ="para1"><?php if(isset ($email)) echo $email; ?></p>
			
			</div>
			<div>
				<p class ="para1"><?php if(isset ($phno)) echo $phno; ?></p>
			
			</div>
			<div>
				<p class ="para1"><?php if(isset ($uni)) echo $uni; ?></p>
			
			</div>
			
			<div>
				<a href = "logout.php"><button class = 'btn'>Logout</button></a>
			</div>
			
			
			
		</div>
	
	
	</body>

</html>
