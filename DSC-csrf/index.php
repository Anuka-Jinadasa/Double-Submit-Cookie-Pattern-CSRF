<!doctype html>
<html >
    <head>
        <meta charset="utf-8">
		<link rel="stylesheet" href="css/home.css">
		<script src="https://kit.fontawesome.com/973cebd43f.js" crossorigin="anonymous"></script>
        <title>Assigment WS 2</title>
    </head>
	<body>
            <div class = "profile">
				<h1>Admin Home</h1>
				<img src ="css/admin.png" class = "avatar">
			
                <div>

				<?php 
                    if(isset($_COOKIE['id_1'])) 
                    {
                        echo "<a href = 'control.php'><button class = 'btn'>Profile</button></a>";
                    }
                ?>
				
				</div>
				
				
  
				<?php 
                    if(!isset($_COOKIE['id_1'])) 
                    {
						
						echo "<br><div><p class ='p'>You Must Login First!</p></div>";
                        
						echo "<div><a href = 'login.php'><button class = 'btn2'>Login</button></a></div>";
                    }
                ?>
				
				
                
				<div>
				<?php 
                    if(isset($_COOKIE['id_1'])) 
                    {
                        echo "<a href = 'logout.php'><button class = 'btn'>Logout</button></a>";
                    }
                ?>
				
				</div>
            
			</div>
      
    </body>
</html>
