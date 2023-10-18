<?php 
include 'admin/config.php';
if (isset($_GET['id'])) {
		$post_id=$_GET['id'];
	}
$res=mysqli_query($conn,"select * from post where id='$post_id'");
$res1=mysqli_query($conn,"select * from category");

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>| Post |</title>

	<!-- Bootstrap Css -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<!-- External Css -->
	<link rel="stylesheet" type="text/css" href="css/index.css">

	<!-- Font Awesome -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

	<style>
		
	</style>
</head>
<body>
	
	
	<!-- Header  -->
	<?php include 'main_header.php'; ?>




	<!-- Content -->
	
	<div class="container">

		<?php while ($rs=mysqli_fetch_array($res)) {
			?>
			
				
		<div class="col-sm-12" style=" margin-top:4%">
			<h3 style="color: #17a2b8;">
							<?php echo $rs['title']; ?>
							</h3>
			<h6 style="color:#17a2b8;"><i class="fa-solid fa-tags"></i>
								<?php echo $rs['category'] ?>&nbsp;&nbsp;<i class="fa-solid fa-user"></i>
								<?php echo $rs['author']; ?>&nbsp;&nbsp;<i class="fa-solid fa-calendar-days"
									style="color: #797c81;"></i><span style="color:grey">
									<?php echo $rs['date'] ?>
								</span>
			</h6>
			<div style="margin:1%; text-align: center;">
			<img src="admin/image/<?php echo $rs['photo']; ?>" width="100%" heigh="100%">
			</div><br>
			
			<div style="margin: 1%; text-justify:center;">
				
				<?php echo $rs['description']; ?>
				
			</div>
		</div>
		
		<?php
		} ?>

	</div>

	
	


	<?php include 'footer.php'; ?>
	<!-- Bootstrap Js -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>