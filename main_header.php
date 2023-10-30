<h1 class="alert text-center heading"><i class="fa-solid fa-blog fa-bounce"></i> My Blog</h1>

	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
		<a class="navbar-brand" href="#"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
			aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="index.php"><i class="fas fa-home"></i> Home <span
							class="sr-only">(current)</span></a>
				</li>
			
				<li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          Category
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		        	<?php while ($rs1=mysqli_fetch_array($res1)) {
		        		?>

		          <a class="dropdown-item" href="cate_wise.php?id=<?php echo $rs1['cate_id']; ?>"><?php echo $rs1['name']; ?></a>
		          <?php
		        	} ?>
		          
		        </div>
		      </li>
			</ul>
		</div>
	</nav>
	<!-- Navbar -->