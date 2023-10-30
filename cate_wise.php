	<?php 
	include 'admin/config.php';

	
		$category=$_GET['id'];
		
	
	$res=mysqli_query($conn,"SELECT * FROM `post` LEFT JOIN category ON post.category=category.cate_id where post.category='$category' ORDER BY post.id DESC;");
	$count=mysqli_num_rows($res);
	$res1=mysqli_query($conn,"select * from category"); //to fetch categories on navbar
	
 ?>


<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>| My Blog |</title>



	<!-- Bootstrap Css -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
		integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<!-- Font Awesome -->
	<link rel="stylesheet" type="text/css"
		href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>

<body>


	<!-- header -->
	<?php include 'main_header.php'; ?>

	<div class="container">
		
		<div class="row">
			<div class="col-sm-12" style=" border-radius: 10px; width: 100%; height: 100%; margin-top: 3%;">
				<?php 
					if ($count>=1) {
					
				while ($rs=mysqli_fetch_array($res)) {
							?>
				<div class="row"style=" width: 100%; align-items: center; border: 2px solid black; display: inline-flex; height: 100%; margin: 1%">


					<div class="col-sm-5 " style="padding: 1%; text-align: center; width: 100%; height: 100%;
					margin-top: 1%;">
						<img src="admin/image/<?php echo $rs['photo']; ?>" width="100%" heigh="100%">
					</div>
					<div class="col-sm-7" style="margin-top:1%">
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
							<h6>
								<?php echo substr($rs['description'],0,300) ; ?>
							</h6>
							<a href="post_detail.php?id=<?php echo $rs['id']; ?>"><button style="margin-left:65%;margin-top:10%; background-color:#17a2b8" class="btn btn-primary mb-2">Read more</button></a>
					</div>
				</div>
				<?php }}
				else{
					echo "<h1 style='text-align:center'>---No Post---</h1>";
				}
				 ?>
				
			</div>

		</div>
		 
	</div>


	<?php include 'footer.php'; ?>
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
</body>

</html>