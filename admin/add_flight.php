<?php
    session_start();
    require '../include/config.php'; //DB configuration & connect

    // Authenticate user.
	if($_SESSION['user_type'] != 1) {
		header("Location: ../index.php?error=loginerror"); //Redirect to home page.
		print_r("<script>alert('You must login first!');</script>");
		exit();
    }
    // check login status
	else if(!isset($_SESSION['email'])){
		header("Location: ../index.php?error=loginerror");
		echo "You must login first";
		exit();
	}
    // include header and title
    include 'admin_header.php';
    echo '<title>Add Flight</title>';
?>
<body>
    <div class="container">
        <div>
            <img src="../images/add-flight.jpg" height=225 width=100% alt="" style="object-fit:cover;ß">
        </div>
        <div class="btn-group d-flex" role="group">
			<div class="btn btn-primary w-100" id="a">Add</div>
			<div class="btn btn-primary w-100" id="u">Update</div>
			<div class="btn btn-primary w-100" id="d">Delete</div>
		</div>
        <hr />
        <div id = "add">
            <!-- Add Flight form -->
            <form class="" action="" role="form" id="addf"  >
                <?php
                    include "flight_form.php";  //Include form 
                ?>
                <div class="form-group">        
                    <div class="offset-sm-2 col-sm-6">
                        <input type ="submit" class="btn btn-primary btn-block" name="submit" id="ad" value ="submit" />
                    </div>
                </div>
            </form>
        </div>
        <div id="update">
            <!-- Search flight -->
            <form class="form-horizontal" role="form">
                <div class="form-group row">
                    <label class="control-label col-sm-2" for="number">Flight No.</label>
                    <div class="col-sm-6">
                        <input type="flightno" class="form-control" name="number" id="number" placeholder="">
                        
                    </div>
                    <div class="col-sm-2">
                        <input type="submit" class="btn btn-success btn-block" name="search" id="search" value = "search flight" />
                    </div>
                </div>
            </form>
            <!-- Update flight form -->
            <form action="" method="">
                <?php
                    include "flight_form.php";  //Include form
                ?>
                <div class="form-group">      
                    <div class="offset-sm-2 col-sm-6">
                        <input type = "submit" class="btn btn-primary btn-block" value="Update" id="up" />
                        <input type = "submit" class="btn btn-primary btn-block" value="Delete" id="de" />
                    </div>
                </div>
            </form> 
        </div>
        
    </div>
    <!-- JS file  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="../js/add-flight.js"></script>
</body>