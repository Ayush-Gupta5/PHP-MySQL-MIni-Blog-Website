<?php 
include 'config.php';
session_start();
if (!isset($_SESSION['login'])) {
	echo "<script>window.location.href='index.php';</script>";
}
$un=$_SESSION['username'];
 ?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>| Catgeory |</title>


	<!-- Bootstrap Css -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
		integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<!-- External Css -->
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<!-- Font Awesome -->
	<link rel="stylesheet" type="text/css"
		href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>

	<!-- Header -->
	<?php include 'header.php'; ?>

	<!-- content -->

	<div>
		<h3 class="text-center mt-5" style="font-size:50px">Category</h3>
		<div>
			<div class="container">
				<!-- Button to Open the Modal -->
				<button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal"><i
						class="fa fa-plus" aria-hidden="true"></i> Add Category</button>


				<!-- The Modal -->
				<div class="modal" id="myModal">
					<div class="modal-dialog">
						<div class="modal-content">

							<!-- Modal Header -->
							<div class="modal-header">
								<h4 class="modal-title">Add Category</h4>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

							<!-- Modal body -->
							<div class="modal-body">
								<form method="post">
									<div class="form-group">
										<label><b>Category Name</b></label>
										<input type="text" name="name" class="form-control"><br>
										<input type="submit" name="submit" class="btn btn-success" value="Add"
											style="width:100px">
									</div>
								</form>
							</div>

							<!-- Modal footer -->
							<div class="modal-footer">
								<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
							</div>

						</div>
					</div>
				</div>
				
				<a href="home.php">
					<button class="btn btn-primary" style="float: right;"><i class="fa fa-arrow-left"
							aria-hidden="true"></i> Back to Dashboard</button></a><br><br>
				<table class="table table-bordered" style="text-align: center;">
					<thead>
						<tr>
							<th> Id</th>
							<th>Category Name</th>
							<th>Action</th>
						</tr>
						<?php 
						$res=mysqli_query($conn,"select * from category");
						while ($rs=mysqli_fetch_array($res)) {
							?>
						<tr>
							<td><?php echo $rs['cate_id']; ?></td>
							<td><?php echo $rs['name']; ?></td>
							<td>

								<form method="post">
									<input type="hidden" name="id" value="<?php echo $rs['cate_id']; ?>">
									<button class="btn btn-warning"><a href="edit_cate.php?cate_id=<?php echo $rs['cate_id'];?>"
											style="text-decoration: none; color: white;">Edit</a></button>
									<button type="submit" name="delete" class="btn btn-danger">Delete</button>
								</form>
							</td>
						</tr>
						<?php
						}
						 ?>
					</thead>
				</table>
			</div>
	<!-- Content End -->

	<!-- php code  -->
	<?php 
		if (isset($_POST['submit'])) {
			$name=$_POST['name'];

			$res1=mysqli_query($conn,"select * from category where name='$name'");
			$count=mysqli_num_rows($res1);

			if ($count==0) {
				$res2=mysqli_query($conn,"insert into category (name) values ('$name')");
				echo "<script>alert('Category Added');
						window.location.href='category.php';
					  </script>";
			}else{
				echo "<script>alert('Category already exist');</script>";
			}
		}
		if (isset($_POST['delete'])) {
			$id=$_POST['id'];

			$res3=mysqli_query($conn,"delete from category where id='$id'");

			if ($res3) {
				echo "<script>alert('Category deleted');
						window.location.href='category.php';
					  </script>";
			}else{
				echo "<script>alert('Error');</script>";
			}
		}
	 ?>


	 
	<!-- Bootstrap Js -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
		integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
		crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
		integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
		crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
		integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
		crossorigin="anonymous"></script>

		<footer style="background-color: #17a2b8; margin-top:3%;">
		<h6 style="padding:1%; margin-bottom: 0px; color: white; text-align: center;">2023&copy; This Site Developed by Ayush Gupta</h6>


	</footer>
</body>

</html>