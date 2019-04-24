<!DOCTYPE html>
<?php
session_start();
include("includes/header.php");

if(!isset($_SESSION['user_email'])){
	header("location: index.php");
}
?>
<html>
<head>
	<title>My Post</title>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style/home_style2.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>

<div class="row">
    <div class="col-sm-12">
        <center><h2>Your Latest Posts</h2></center>
    <?php user_posts(); ?>
    </div>
</div>

</body>
</html>

<!--
    function user_posts(){
global $con;
if(isset($_GET['u_id'])){
    $u_id= $_GET['u_id'];
}
$get_posts = "select * from posts where user_id='$u_id' ORDER by 1 DESC LIMIT 5";
$run_posts = mysqli_query($con,$get_posts);

while($row_posts=mysqli_fetc_array($run_posts)){
         $post_id=$row_posts['post_id'];
            $user_id=$row_posts['user_id'];
            $content=$row_posts['post_content'];
            $upload_image=$row_posts['upload_image'];
            $post_date=$row_posts['post_date'];

            $user ="select * from users where user_id='$user_id' AND posts='yes'";

            $run_user=mysqli_query($con,$user);
            $row_user= mysqli_fetch_array($run_user);

             $user_name= $row_user['user_name'];
            $user_image= $row_user['user_image'];

                if(isset($_GET['u_id'])){
                    $u_id= $_GET['u_id'];
                }
            $getuser="select user_email from users where user_id= '$user_id'";
            $run_user=mysqli_query($con,$getuser);
            $row=mysqli_fetch_array($run_user);

            $user_email=$row['user_email'];
            
            $user= $_SESSION['user_email'];
            $get_user="select * from users where user_email='$user'";
            $run_user=mysqli_query($con,$get_user);
            $row=mysqli_fetch_array($run_user);

            $user_id=$row['user_id'];
            $u_email=$row['user_email'];

            if($u_email!= $user_email){
                echo "<script>window.open('my_post.php?u_id= $user_id', '_self')</script>"
            }
            
}

    }