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
		margin-top:100px;
	}
	#login{
		width: 40%;
		border: 1px solid #1da1f2;
		border-radius: 30px;
	}
button{
	margin-left:100px;
}
h2{
	color:gray;
}
</style>

<body>
				<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                    <a class="navbar-brand" href="#">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQKixQnBkZmXC7i2WHREw4doK1PTRfcc03N3s4PU_c-EJco73BW" width="30" height="30"  alt="">
                            <b>FRIENDSBOOK</b>
                          </a>
						  </nav>
				<div class="row justify-content-around">
                      <div class="col-md-6">
                          <img src="https://cdn0.tnwcdn.com/wp-content/blogs.dir/1/files/2013/11/social-network-links-730x410.jpg" height="550" width="750">
                       </div>        
                       <div class="col-md-6" style="left:5.5%; margin:30px 0px 0px 0px;">
                        <h2>A place to connect with people</h2>
                        <h5>Providing a platform to users to share 
                          their posts images<br>and add other users as friends and allow messaging<br> between the 
                          users </h5>
						  
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