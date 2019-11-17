<?php
	session_start();
	if(!isset($_SESSION['userId'])) {
		header("Location: ../index.php?error=loginerror");
		echo "You must login first";
		exit();
	}
    // include header and title
    include 'header.php';
    echo '<title>Contact Page</title>';
?>
<body>
	<div class="container-fluid">
		<h1 class="text-center">Contact With Us</h1>
		<div class="row contact">
		<div class="col-md-2"></div>
			<div class="col-md-4">
				<h2><center>Contact</center></h2>
				<form action="" class="">
				    <div class="form-group">
				      <label for="email">Email:</label>
				      <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" required>
				      <!-- <div class="valid-feedback">Valid.</div>
				      <div class="invalid-feedback">Please fill out this field.</div> -->
				    </div>
				    <div class="form-group">
				      <label for="comments">Comments:</label>
				      <textarea type="text" class="form-control" rows="6" id="comments" placeholder="Type Your Message.." name="comments" required></textarea>
				    </div>
				    <button type="submit" class="btn btn-block">Submit</button>
			  </form>
			</div>
			<div class="col-md-6">
				<div id="map"></div>
		</div>
	</div>
	
	<script>
    	var map;
    	function initMap() {
	        map = new google.maps.Map(document.getElementById('map'), {
	          center: {lat: -23.684994, lng: 90.356331},
	          zoom: 8
	        });
    	}
    </script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDAKcAkDvv6dsATz8BJNj4dciYmElHRfz4&callback=initMap"
	    async defer></script>
	
	<?php
		include 'footer.php';
	?>
</body>