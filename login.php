<?php
    
    // include header and title
    include 'header.php';
    echo '<title>Login Page</title>';
?>
<body>
	<div  id="page-container">
		<div class="row" >
			<div class="col-md-4">	</div>
			<div class="col-md-4">
				<form action="" class="loginForm">
				    <div class="form-group">
				      <label for="email">Email:</label>
				      <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" required>
				      <!-- <div class="valid-feedback">Valid.</div>
				      <div class="invalid-feedback">Please fill out this field.</div> -->
				    </div>
				    <div class="form-group">
				      <label for="pwd">Password:</label>
				      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
				     <!--  <div class="valid-feedback">Valid.</div>
				      <div class="invalid-feedback">Please fill out this field.</div> -->
				    </div>
				    <div class="form-group form-check">
				      <label class="form-check-label">
				        <input class="form-check-input" type="checkbox" name="remember" required> Remember me
				       <!--  <div class="valid-feedback">Valid.</div>
				        <div class="invalid-feedback">Check this checkbox to continue.</div> -->
				      </label>
				    </div>
				    <button type="submit" class="btn btn-primary">Submit</button>
			  </form>
			</div>
			<div class="col-md-4">	</div>

		</div>
	</div>
</body>







<?php
include 'footer.php';
?>
