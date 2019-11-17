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
				<form action="include/signin.inc.php" class="loginForm" method="post">
				    <div class="form-group">
				      <label for="email">Email:</label>
				      <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" required>
				    </div>
				    <div class="form-group">
				      <label for="pwd">Password:</label>
				      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pass" required>
				    </div>
				    <div class="form-group form-check">
				      <label class="form-check-label">
				        <input class="form-check-input" type="checkbox" name="remember" required> Remember me
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

