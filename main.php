<!DOCTYPE html>
<html>
<head>
	<title>FriendsBook</title>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="style/main.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
 </head>
<style>
	body{
		overflow-x: hidden;
	}
	#signup{
		width: 40%;
		border-radius: 30px;
		margin-left:
	}
	#login{
		width: 40%;
		border: 1px solid #1da1f2;
		border-radius: 30px;
	}


</style>
<body>
				<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                    <a class="navbar-brand" href="#">
                            <img src="image/icon.png" width="30" height="30"  alt="">
                            <b>FRIENDSBOOK</b>
                          </a>
						  </nav>
				<div class="row justify-content-around">
                      <div class="col-md-6">
                          <img src="image/front.jpg" height="550" width="750">
                       </div>        
                       <div class="col-md-6" style="right:1.2%;">
                        <h2>A place to connect with people</h2>
                        <h4>Providing a platform to users to share 
                          their posts images and add other users as friends and allow messaging between the 
                          all users </h4>
						  
				<form method="post" action="">
				<button id="signup" class="btn btn-primary" name="signup">Sign up</button><br><br>
				<?php
					if(isset($_POST['signup'])){
						echo "<script>window.open('signup.php','_self')</script>";
					}
				?>
				<button id="login" class="btn btn-success" name="login">Login</button><br><br>
				<?php
					if(isset($_POST['login'])){
						echo "<script>window.open('signin.php','_self')</script>";
					}
				?>
			</form>
		</div>
	</div>
</body>
</html>