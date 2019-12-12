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
					$sql = "SELECT id ,title, image_direct, detail, price FROM packages ORDER BY id ASC";
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
							<!-- <a href='bookform.php' class="book-btn btn">Book Now</a> -->
							<form action="pkg_cart.php" method="post">
								<input type="hidden" name="p_id" value="<?php echo $package['id'];?>">
								<input type="hidden" name="p_name" value="<?php echo $package['title'];?>">
								<input type="hidden" name="price" value="<?php echo $package['price'];?>">
								<input type="submit" name="add-to-cart" class="book-btn btn" value="Add to Cart" >
							</form>
							
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
