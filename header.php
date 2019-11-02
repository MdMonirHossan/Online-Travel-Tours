<?php
  session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" type="text/css">
  </head>
  <!-- Navigation -->



   <nav class="navbar navbar-expand-lg  static-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="images/logo-full.png" alt="Logo" style="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Packages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                   
                    <?php
                        // $_SESSION["favcolor"] = "green";

                        if( isset( $_SESSION['favcolor'] ) ) {
                            echo '  <li  class="nav-item">
                                        <a class="nav-link" href="#">Logout</a>
                                     </li>';
                        }
                        else{
                            session_unset();
                            session_destroy();
                            echo ' 
                             <li class="nav-item">
                                 <a class="nav-link" href="login.php">Login</a>
                            </li>
                             <li class="nav-item">
                                 <a class="nav-link" href="#">Sign Up</a>
                            </li>';
                        }
                    ?>
                </ul>
            </div>
        </div>
    </nav>


  
