<?php
    
    // include header and title
    include 'header.php';
    echo '<title>SignUp Page</title>';
?>
<body>
	<div id="page-container">
		<div class="row" >
			<div class="col-md-4">	</div>
			<div class="col-md-4 center-content">
				<h2><center>Registration</center></h2>
				<form action="" class="loginForm">
					<div class="form-group">
				      <label for="fullName">Full Name:</label>
				      <input type="text" class="form-control" id="fullnamne" placeholder="Enter Full Name" name="fullName" required>
				    </div>
				    <div class="form-group">
				      <label for="email">Email:</label>
				      <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" required>
				    </div>
				    <div class="form-group">
				      <label for="pwd">Password:</label>
				      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
				    </div>
				    <div class="form-group">
				      <label for="Rpwd">Retype Password:</label>
				      <input type="password" class="form-control" id="Rpwd" placeholder="Retype password" name="pswd" required>
				      <div id="feedback"></div>
				    </div>
				    <button type="submit" onclick="verifyPass()" id="register-btn" class="btn  btn-block">Register</button>
			  </form>
			</div>
			<div class="col-md-4">	</div>

		</div>
		

	</div>
	<?php
		include 'footer.php';
	?>
</body>