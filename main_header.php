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
			</ul>
			<ul class="navbar-nav mr-auto">
				<?php 
					while ($rs1=mysqli_fetch_array($res1)) {
						?>

				<li class="nav-item"   >
      				<a class="nav-link" href="cate_wise.php?category=<?php echo $rs1['name']; ?>"><?php echo $rs1['name']; ?></a>
      			</li>
      			<?php 
					}
				 ?>
			</ul>
		</div>
	</nav>
	<!-- Navbar -->