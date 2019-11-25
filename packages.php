<?php

	require "include/config.php";
    // include header and title
    include 'header.php';
    echo '<title>Packages</title>';
?>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php
					//fetch value from DB
					$sql = "SELECT title, image_direct, detail, price FROM packages";
					$result = mysqli_query($db_con, $sql);
					$sl_no= 1;
					foreach($result as $package) //Itteration for all booking
					{
				?>
				<div class="pckg-card">
					<h3><center><?php echo $package['title'];?></center></h3>
					<div class="row">
						<div class="col-md-4">
							<!-- image directory -->
							<img src="admin/uploads/<?php echo $package['image_direct'];?>" class="pckg-img">
						</div>
						<div class="col-md-8">
							<p> <?php echo $package['detail'];?></p>
							<b><?php echo $package['price'];?></b>
							<a href='bookform.php' class="book-btn btn">Book Now</a>
						</div>
					</div>
				</div>
				<?php
						$sl_no++; //Increase count
					}
				?>
			</div>

		</div>
	</div>
	<!-- Footer -->
	<?php
		include 'footer.php';
	?>
</body>
