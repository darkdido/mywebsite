<!DOCTYPE html>
<?php
session_start();
include("includes/header.php");

if(!isset($_SESSION['user_email'])){
	header("location: index.php");
	echo "<script>window_open('main.php')";
	exit();
}
?>
<html>
<head>

	<title>See Results</title>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style>

body{
	overflow-x: hidden;
}
#upload_image_button{
	position: absolute;
	top: 50.5%;
	right: 14%;
	min-width: 100px;
	max-width: 100px;
	border-radius: 4px;
	transform: translate(-50%, -50%);
}
label{
	padding: 7px;
	display: table;
	color: #fff;
}
input[type="file"]{
	display: none;
}
#content{
	width: 70%;
}
#btn-post{
	min-width: 25%;
	max-width: 25%;
}
#insert_post{
	background-color: #fff;
	border: 2px solid #e6e6e6;
	padding: 40px 50px;
}
#posts{
	border: 5px solid #e6e6e6;
	padding: 40px 50px;
}
#posts-img{
	padding-top: 5px;
	padding-right: 10px;
	min-width: 102%;
	max-width: 50%;
}
#single_posts{
	border: 5px solid #e6e6e6;
	padding: 40px 50px;
}
</style>

</head>
<body>
<div class="row">
<center><h2>See Your Result Here</h2></center>
<?php results(); ?>
</div>
</body>
</html>