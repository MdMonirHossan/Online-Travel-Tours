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
    <!-- <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet"> -->
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <script type="text/javascript" src="js/main.js"></script>
    <script src="https://kit.fontawesome.com/308841f53d.js" crossorigin="anonymous"></script>

</head>
  <!-- Navigation -->



   <nav class="navbar navbar-expand-lg  static-top">
        <div class="container-fluid">
            <!-- <div class="row"> -->
                
              <div class="col-xs-3">
                <a class="navbar-brand" href="#">
                  <img src="images/logo-full.png" alt="Logo" style="">
                </a>
              </div>
              
              <div class="col-xs-9">
                 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                 </button>
            
                
                    <div class="collapse navbar-collapse" id="navbarToggleExternalContent">
                        <ul class="navbar-nav ml-auto">
                        <div class="row d-flex justify-content-between">
                        <li class="nav-item active">
                                <!-- <i class="icon-dropbox"></i> -->
                                <a class="nav-link text-sm-center col-xs-6" href="index.php"><i class="fas fa-home"></i>Home <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item text-sm-center">
                                <a class="nav-link col-xs-6" href="Packages.php">Packages</a>
                            </li col-md-3>
                            <li class="nav-item text-sm-center">
                                <a class="nav-link col-xs-6" href="contact.php">Contact</a>
                            </li>
                            <li class="nav-item text-sm-center">
                                <a class="nav-link col-xs-6"  href="#">About</a>
                            </li>
            
                        </div>
                                            
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
                                    <div class="row"> 
                                      <li class="nav-item col-sm-6">
                                       <a class="nav-link" href="login.php">Login</a>
                                      </li>
                                      <li class="nav-item col-sm-6">
                                       <a class="nav-link" href="signup.php">Sign Up</a>
                                      </li>
                                    </div>';
                                
                                }
                            ?>
                        </ul>        
                    </div>
             
            <!-- </div> -->
        </div>
        
    </nav>


  
