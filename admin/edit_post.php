<?php 
include 'config.php';
session_start();
if (!isset($_SESSION['login'])) {
	echo "<script>window.location.href='index.php';</script>";
}
$un=$_SESSION['username'];
if (isset($_GET['id'])) {
	$post_id=$_GET['id'];
}
$res1=mysqli_query($conn,"select * from post where id='$post_id'");
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>| Edit Post |</title>

	

	<!-- Bootstrap Css -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<!-- External Css -->
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<!-- Font Awesome -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

	<style>
		button[type=submit]{
			width: 100px;
		}
	</style>
</head>
<body>
	<!-- Header  -->
	<?php include 'header.php'; ?>
	<!-- Content -->
	
		
		<div class="container">
			<div class="col-md-5" style="margin-left: 300px;">
			    <div class="form-area" >  
			        <form role="form" method="post" enctype="multipart/form-data">
			        <br style="clear:both">
			                    <h3 style="margin-bottom: 25px; text-align: center;">Add Post</h3>
			                    <?php while ($rs1=mysqli_fetch_array($res1)) {
			                    	?>

			    				<div class="form-group">
									<input type="text" class="form-control" name="title" placeholder="Title" value="<?php echo $rs1['title']; ?>" required>
									<input type="hidden" name="id" value="<?php echo $rs1['id']; ?>">
								</div>
								
								<div class="form-group">
									<select class="form-control" name="category"  >
										
										<option ><?php echo $rs1['category']; ?></option>
										<?php 
										$res=mysqli_query($conn,"select * from category");
										while ($rs=mysqli_fetch_array($res)) {
											echo"<option value=".$rs['name'].">".$rs['name']."</option>";
										}
										 ?>
									</select>
								</div>
			                    <div class="form-group">
			                    <textarea class="form-control" name="desc" type="textarea" id="message" placeholder="Description" rows="7" ><?php echo $rs1['description']; ?></textarea>                    
			                    </div>
			                    <div class="form-group">
									<label>Thumbnil</label>
									<input type="file" class="form-control" name="photo" accept="image/*"  >
									<input type="hidden" name="old_photo" value="<?php echo $rs1['photo'];?>">
									<label><b>Current Image</b></label>&nbsp;<img src="image/<?php echo $rs1['photo']; ?>" width="150px" height="100px" >
								</div>
								
			                    <input type="hidden" name="date" value="<?php echo  $rs1['date'];; ?>">
			                    <input type="hidden" name="author" value="<?php echo  $un ?>">
			                    <?php
			                    } ?>
			            
			        <button type="submit" name="submit" class="btn btn-primary pull-right">Update</button>
			        <button class="btn btn-warning"><a href="post.php" style="text-decoration:none; color:white">Back to Home</a></button>
			        </form>
			    </div>
			</div>
			</div>



	<?php 
		if (isset($_POST['submit'])) {
			$id=$_POST['id'];
			$title=$_POST['title'];
			$category=$_POST['category'];
			$description=$_POST['desc'];
			$date=$_POST['date'];
			$author=$_POST['author'];
			$old_photo=$_POST['old_photo'];
			$photo=$_FILES['photo']['name'];

			

			if ($photo !="") {
				$update_photo=$_FILES['photo']['name'];
			}else{
				$update_photo=$old_photo;
			}
			move_uploaded_file($_FILES['photo']['tmp_name'], 'image/'.$photo);
			unlink("image/".$old_photo);

			$str="update post set title='$title', category='$category', description='$description', date='$date', author='$author', photo='$update_photo' where id='$id'";
			$res2=mysqli_query($conn,$str);
			if ($res2) {
				echo "<script>alert('Post updated');
					window.location.href='post.php';
				  </script>";
			}else{
				echo "<script>alert('Error');
				  </script>";
			}
			
		}
	 ?>

	 <footer style="background-color: #17a2b8; margin-top:25px; margin-bottom: 0px;">
		<h6 style="padding:10px; margin-bottom: 50px; color: white; text-align: right;">2023&copy; This Site Developed by Ayush Gupta</h6>


	</footer>
	<!-- Bootstrap Js -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script type="text/javascript"></script>
</body>
</html>