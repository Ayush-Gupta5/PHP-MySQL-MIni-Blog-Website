<?php 
include 'config.php';
session_start();
if (!isset($_SESSION['login'])) {
	echo "<script>window.location.href='index.php';</script>";
}
$un=$_SESSION['username'];
$res=mysqli_query($conn,"select * from post");
$res1=mysqli_query($conn,"select * from category");
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>| Home |</title>

	<!-- Bootstrap Css -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


	<!-- External Css -->
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<!-- Font Awesome -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

	<style>
		
	</style>
</head>
<body>
	
	
	<!-- Header  -->
	<?php include 'header.php'; ?>



	<!-- Content -->
	<div> <h3 class="alert text-center mt-5" style="font-size:50px">Dashboard</h3> </div>
		<div class="row"> 

			<div class="mycol" style="background: #17a2b8; color:white">		
				<h1>&nbsp;Categorys</h1><br> <h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo mysqli_num_rows($res1);?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-list-alt" aria-hidden="true"></i></h1><hr><a href="category.php" style="text-decoration:none; color:white;"><h5 style=" ">More info</h5></a>
			</div> 

			<div class="mycol1" style="background: #17a2b8; color: white;">
				<h1>&nbsp;Posts</h1><br> <h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo mysqli_num_rows($res);?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-tasks" aria-hidden="true"></i></h1>
				<hr><a href="post.php" style="text-decoration:none; color:white"><h5 style=" margin-right: 5%;">More info</h5></a>
			</div>

		</div> 
	
	


	<footer style="background-color: #17a2b8; margin-top:10%;">
		<h6 style="padding:1%; margin-bottom: 0px; color: white; text-align: center;">2023&copy; This Site Developed by Ayush Gupta</h6>


	</footer>
	<!-- Bootstrap Js -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>