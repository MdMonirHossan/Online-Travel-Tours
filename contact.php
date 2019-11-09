<?php
    
    // include header and title
    include 'header.php';
    echo '<title>Contact Page</title>';
?>
<body>
	<div class="container">
		<h1 class="text-center">Contact With Us</h1>
		<div class="row contact">
			<div class="col-md-6">
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
	<?php
		include 'footer.php';
	?>
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
</body>