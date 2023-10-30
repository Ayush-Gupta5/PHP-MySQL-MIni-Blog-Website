<?php 
include 'config.php';
session_start();
if (!isset($_SESSION['login'])) {
	echo "<script>window.location.href='index.php';</script>";
}
$un=$_SESSION['username'];
if (isset($_GET['cate_id'])) {
	$cate_id=$_GET['cate_id'];
}
$res=mysqli_query($conn,"select * from category where cate_id='$cate_id'");
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>| Edit Category |</title>

	<!-- Bootstrap Css -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<!-- External Css -->
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<!-- Font Awesome -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

	<style>
		input[type=text]{
			text-align: center;
			font-size: 20px;
			width: 50%;
		}
		input[type=submit]{
			width: 160px;
		}
	</style>
</head>
<body>
	
	
	<!-- Header  -->
	<?php include 'header.php'; ?>



	<!-- Content -->
	<div class="container mt-5">
	<h1 class="alert-info text-center mb-5 p-3">Add Department</h1>
	<center>
		<?php while ($rs=mysqli_fetch_array($res)) {
			?>

	<form method="post" >
		<div class="form-group">
			<label><b>Department Name</b></label>
			<input type="hidden" name="cname" class="form-control" value="<?php echo $rs['name']; ?>"><br>
			<input type="text" name="name" class="form-control" value="<?php echo $rs['name']; ?>"><br>
			<input type="submit" name="submit" class="btn btn-success" value="Update">
			<button class="btn btn-info"><a href="category.php" style="text-decoration: none; color: white;">Back</a></button>
		</div>
	</form>
	<?php
		} ?>
	</center>
	</div>

	<!--Php Code Start  -->

		<?php 
			if (isset($_POST['submit'])) {
				$name=$_POST['name'];
				$currentname=$_POST['cname'];

				$rs1=mysqli_query($conn,"update category set name='$name' where cate_id='$cate_id'");
				$rs2=mysqli_query($conn,"update post set category='$name' where category='$currentname'");
				echo '<script>alert("Category Update Successfully");</script>';
				echo "<script>window.location.href='category.php';</script>";
			}
		 ?>
		<!-- Php Code End -->
	


		<?php include '../footer.php'; ?>
	<!-- Bootstrap Js -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>