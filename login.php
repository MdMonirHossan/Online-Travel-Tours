<?php

    // include header and title
    include 'header.php';
    echo '<title>Login Page</title>';
?>
<body>
	<div id="page-container">
		<div class="row" >
			<div class="col-md-4">	</div>
			<div class="col-md-3 center-content">
				<h2><center>Sign In</center></h2>
				<?php
				//Get all error message from url
					$error_msg = $error_pass = "";
					if(isset($_GET['error'])){
						if ($_GET['error'] == "nouserfound") {
							$error_msg = "No user found!";
						}
						else if ($_GET['error'] == "wrongpassword") {
							$error_pass = "Check Password!";
						}
						else if ($_GET['error'] == "namepass") {
							$error_msg = "Name can have only alphabet!";
							$error_pass = "Check Password!";
						}
					}
				?>
				<form action="include/signin.inc.php" class="loginForm" method="post">
					<?php
						echo "<div class='invalid-feedback' style='display:block;'><b>".$error_msg."</b></div>";  //Show error message
					?>
				    <div class="form-group">
				      <label for="email">Email:</label>
				      <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" required>
				    </div>
				    <div class="form-group">
				    <label for="pwd">Password:</label>
				    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pass" required>
					<?php
						echo "<div class='invalid-feedback' style='display:block;'>".$error_pass."</div>";  //Show error message
					?>
				    </div>
				    <div class="form-group form-check">
				      <label class="form-check-label">
				        <input class="form-check-input" type="checkbox" name="remember"> Remember me
				      </label>
				    </div>
				    <button type="submit" name="signin-submit" class="btn btn-block">Sign In</button>
			  </form>
			</div>
			<div class="col-md-4">	</div>

		</div>
	</div>
	<?php
		include 'footer.php';
	?>
</body>
