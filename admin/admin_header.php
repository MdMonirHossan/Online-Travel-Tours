<?php
  session_start(); //Session start.
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css" type="text/css">
  </head>


  <!-- Navigation -->
    <nav class="navbar navbar-expand-lg  static-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="../index.php">
                <img src="../images/logo.jpg" alt="Logo" width=50 height=50 alt="Logo">
                <span><i>Travel</i></span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="booking_req.php">Requests <span class="sr-only">(current)</span>  <!-- Active nav link when logged in -->
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register_user.php">User</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="add_package.php">Add Package</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li>
                        <div class="dropdown">
                            <button class="dropbtn">More</button>
                            <div class="dropdown-content">
                                <a href="search_booking.php">See Your Booking</a>
                                <a href="#">Link 2</a>
                                <a href="#">Link 3</a>
                            </div>
                        </div>
                    </li>
                    
                    <?php
                        //Check session status.
                        if(isset($_SESSION['userId'])) {
                            echo '  <li  class="nav-item">
                                        <a class="nav-link" href="../include/logout.inc.php">Logout</a>
                                        </li>';
                        }
                        // if session in not set.
                        else{
                            echo ' 
                                <li class="nav-item">
                                    <a class="nav-link" href="login.php">Login</a>
                            </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="signup.php">Sign Up</a>
                            </li>';
                        }
                    ?>
                </ul>
            </div>
        </div>
    </nav>