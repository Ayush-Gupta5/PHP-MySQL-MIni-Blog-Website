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
	<title>| Manage Post |</title>

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
	<div>
		<h3 class="text-center mt-5 display-3">Posts</h3>
		<div style="margin: 50px;">
  <a href="add_post.php">
      <button class="btn btn-success" style=" width:175px">Add Post</button></a>
	
      <form method="post" style="text-align: center; display:inline-block;">
      	<input type="text" name="skw">
      	<button type="submit" class="btn btn-warning" name="search" >Search</button>
      	<button type="submit" class="btn btn-secondary" name="refresh" >Refresh</button>
      </form>
	     
	<a href="home.php">
      <button class="btn btn-primary" style="float: right;" >Back to Dashboard</button></a>
      <br><br>

	<table class="table table-bordered text-center">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Image</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Date</th>
      <th scope="col">Category</th>
      <th scope="col">Author</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  	<?php 
  		if (isset($_POST['search'])) {
  			$skw=$_POST['skw'];
  			$str="select * from post where category LIKE '%$skw%' OR date LIKE '%$skw%'  ORDER BY id desc";
  			$res1=mysqli_query($conn,$str);
  			$count=mysqli_num_rows($res1);

  			if ($count==0) {
  				echo "<script>alert('No Post Found');
  								window.location.href='post.php';
  				</script>";
  			}else{
  				while ($rs1=mysqli_fetch_array($res1)) {
  					?>
  					
  						<tr>
					      <td><?php echo $rs1['id']; ?></td>
					      <td><img src="image/<?php echo $rs1['photo']; ?>" width="200px" height="100px"></td>
					      <td><?php echo substr($rs1['title'],0,30); ?></td>
					      <td><?php echo substr($rs1['description'],0,30); ?></td>
					      <td><?php echo $rs1['date']; ?></td>
					      <td><?php echo $rs1['category']; ?></td>
					      <td><?php echo $rs1['author']; ?></td>
					      <td>
					      	<form method="post">
					      		<input type="hidden" name="image" value="<?php echo $rs1['photo']; ?>">
					      		<input type="hidden" name="postid" value="<?php echo $rs1['id']; ?>">
					      		<button class="btn btn-warning"><a href="edit_post.php?id=<?php echo $rs1['id']; ?>" style="text-decoration: none; color:white">Edit</a></button>
					      		<button type=submit name="delete"class="btn btn-danger">Delete</button>
					      	</form>
					      </td>					      
					    </tr>
  					<?php
  				}
  			}
  		}else{
  				$res=mysqli_query($conn,"SELECT * FROM `post` LEFT JOIN category ON post.category=category.cate_id ORDER BY id desc");
  		while ($rs=mysqli_fetch_array($res)) {
  			?>


			    <tr>
			      <td><?php echo $rs['id']; ?></td>
			      <td><img src="image/<?php echo $rs['photo']; ?>" width="200px" height="100px"></td>
			      <td><?php echo substr($rs['title'],0,30); ?></td>
			      <td><?php echo substr($rs['description'],0,30); ?></td>
			      <td><?php echo $rs['date']; ?></td>
			      <td><?php echo $rs['name']; ?></td>
			      <td><?php echo $rs['author']; ?></td>
			      <td>
			      	<form method="post">
			      		<input type="hidden" name="image" value="<?php echo $rs['photo']; ?>">
			      		<input type="hidden" name="postid" value="<?php echo $rs['id']; ?>">
			      		<button class="btn btn-warning"><a href="edit_post.php?id=<?php echo $rs['id']; ?>" style="text-decoration: none; color:white">Edit</a></button>
			      		<button type=submit name="delete"class="btn btn-danger">Delete</button>
			      	</form>
			      </td>
			      
			      
			    </tr>
    <?php
  		}
  		}
  	?>





  	
  		
  </tbody>
</table>
</div>


	<!-- php code -->
	<?php 
		if (isset($_POST['delete'])) {
				$postid=$_POST['postid'];
				$image=$_POST['image'];
				$res2=mysqli_query($conn,"delete from post where id='$postid'");
				unlink("image/".$image);
				if ($res2) {
					echo "<script>alert('Post Deleted');
								window.location.href='post.php';
							  </script>";
				}
		}
	 ?>

	 <footer style="background-color: #17a2b8; margin-top:2%; margin-bottom: 0;">
		<h6 style="padding:10px; margin-bottom: 0%; color: white; text-align: right;">2023&copy; This Site Developed by Ayush Gupta</h6>


	</footer>
	<!-- Bootstrap Js -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>

