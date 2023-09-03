<?php 
include 'config.php';
session_start();
if (!isset($_SESSION['login'])) {
	echo "<script>window.location.href='index.php';</script>";
}

$un=$_SESSION['username'];
$res=mysqli_query($conn,"select * from users where username='$un'");

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>| Change Password |</title>

	<!-- Bootstrap Css -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<!-- External Css -->
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<!-- Font Awesome -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

	<style>
		input[type=Password]{
			width: 50%;
			border-radius: 5px;

		}
		.myform{
			border: 2px solid black;
			border-radius: 10%;
			width: 40%;
			height: 230px;
			padding: 10px;
		}
	</style>
</head>
<body>
	
	
	<!-- Header  -->
	<?php include 'header.php'; ?>



	<!-- Content -->
	<div class="container">
		<h1 class="text-center mt-5 mb-5">Change Password</h1>
		<center>
		<form method="post" class="myform">
			<div class="form-group">
				<label>Current Password</label>
				<input type="password" name="currentpass" class="form-control">
			</div>
			<div class="form-group">
				<label>New Password</label>
				<input type="password" name="newpass" class="form-control">
			</div>
			<?php while ($rs=mysqli_fetch_array($res)) {
				?>
			<div class="form-group">
				<input type="hidden" name="oldpass" class="form-control" value="<?php echo $rs['password']; ?>">
			</div>
			<?php
			} ?>
				<button type="submit" name="update" class="btn btn-success">Update</button>
				<button class="btn btn-warning"><a href="home.php" style="text-decoration:none; color:white">Back to Home</a></button>
		</form>
		</center>

	</div>

	<!-- Php Code  -->
	<?php 
		if (isset($_POST['update'])) {
			$currentpass=$_POST['currentpass'];
			$newpass=$_POST['newpass'];
			$oldpass=$_POST['oldpass'];

			if ($currentpass==$oldpass) {
				$res1=mysqli_query($conn,"update users set password='$newpass' where username='$un'");
				echo "<script>alert('Password change successfully');
						window.location.href='home.php';
					  </script>";
			}else{
				echo "<script>alert('Old password does not match');</script>";
			}
		}
	 ?>
	


	 <footer style="background-color: #17a2b8; margin-top:164px; margin-bottom: 0px;">
		<h6 style="padding:10px; margin-bottom: 50px; color: white; text-align: right;">2023&copy; This Site Developed by Ayush Gupta</h6>


	</footer>
	<!-- Bootstrap Js -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>