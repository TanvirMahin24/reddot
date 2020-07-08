<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <title>RedDrop</title>
</head>
<body>
    <div class="login-reg-panel">			
		<div class="register-info-box">
			<img src="./img/REDrop Logo.png" class='loginImg' alt="">
		</div>			
		<div class="white-panel">
			<div class="login-show">
				<h2>LOGIN</h2>
				<?php
				//echo password_hash("123", PASSWORD_DEFAULT);
					if(isset($_GET['error'])){
						if($_GET['error'] == 'emptyfields'){
							echo '<div class="alert alert-danger">All fields are required</div>';
						}
						elseif($_GET['error'] == 'wrongpwd'){
							echo '<div class="alert alert-danger">Wrong Password</div>';
						}
						elseif($_GET['error'] == 'nouser'){
							echo '<div class="alert alert-danger">User Not Found</div>';
						}
					}
				?>
				<form action="includes/login.inc.php" method="POST">
                    <input type="text" name="emailOrUser" placeholder="Email or Username" >
				    <input type="password" name="password" placeholder="Password">
				    <input type="submit" name="login-submit" value="Login">
                </form>
			</div>
		</div>
	</div>
</body>
</html>