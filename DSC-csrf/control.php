<!DOCTYPE html>
<html>
	<head>
		
		<meta charset = "utf-8">
		<link rel="stylesheet" href="css/control.css">
		<script src="https://kit.fontawesome.com/973cebd43f.js" crossorigin="anonymous"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
 
	<script>
	
	$(document).ready(function(){
	
	var cookie_value = "";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
	var csrf = decodedCookie.split(';')[2]
	// alert(decodedCookie)
	if(csrf.split('=')[0] = "CSRFtoken" ){
		// alert(csrf.split('csrfTokenCookie=')[1])
		cookie_value = csrf.split('CSRFtoken=')[1];
		document.getElementById("token_hidden_field").setAttribute('value', cookie_value) ;
	}
	});

	</script>

  <head>
	<title>Edit profile WS 2</title>
  </head>
	<body>
			<div class = "profile">
				<h1>Edit Profile</h1>
				<img src ="css/a.png" class = "avatar">
				<form name="updateForm" class= "update" action="update.php" method="post">
				<div class ="textbox">
					<i class="fas fa-user" ></i>
					<input type="text" id="fname" name="fname" placeholder="First Name" value = "" required>	
				</div>
				<div class ="textbox">
					<i class="fas fa-user" ></i>
					<input type="text" id="lname" name="lname" placeholder="Last Name" value = ""  required>
					<input type="hidden" id="token_hidden_field" name="token" value = "">
				</div>
				<div class ="textbox">
					<i class="fas fa-at" ></i>
					<input type="email" id="email" name="email" placeholder="E-mail Address" value = ""  required>	
				</div>
				<div class ="textbox">
					<i class="fas fa-university"></i>
					<input type="text" id="university" name="university" placeholder="University Name" value = "" required>
				</div>
				<div class ="textbox">
					<i class="fas fa-phone-alt"></i>
					<input type="text" id="phno" name="phno" placeholder="phone number"maxlength="10" value = "" required>	
				</div>
				<input name="Submot" type="submit" value="Submit" class="btn">
				<input name="Reset" type="reset" value="Reset" class="btn2">
			</div>
			
        
	</body> 
</html>