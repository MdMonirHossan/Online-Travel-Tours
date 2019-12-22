<?php
    
    // include header and title
    include 'header.php';
    echo '<title>Search Booking</title>';
?>
<body>
    <div id="page-container">
        <div class="row" >
            <div class="col-md-4">
                <?php
                    if(isset($_POST["search-submit"])){

                        require 'include/config.php';  //Required DB configuration
                        // check login status
                        if(!isset($_SESSION['email'])){
                            header("location: search_booking.php?error=loginerror");
                            echo "You must login first";
                            exit();
                        }
                        else{
                            $email = $_POST['email'];
                            $phone = $_POST['phone'];

                            $sql ="SELECT * FROM bookng_request WHERE email like'%$email%' AND phone = '$phone' ";  //compare email and number

                            $stmt = mysqli_stmt_init($db_con);
                            if(!mysqli_stmt_prepare($stmt , $sql)){
                                header("location: search_booking.php?error=sqlerror");   //Redirect to same page
                            }
                            else{
                                mysqli_stmt_bind_param($stmt, "ss", $email , $phone );
                                mysqli_stmt_execute($stmt);
                                $result = mysqli_stmt_get_result($stmt);

                                if($row = mysqli_fetch_assoc($result)){  //Fetch all row from Db
                                    echo "<div class='center-content' > ";
                                    echo "<br/><h1>Result found </h1><br/><hr>";
                                    $name = $row['fullname'];
                                    $email = $row['email'];
                                    $phone = $row['phone'];
                                    $adate = $row['arrival_date'];
                                    $ddate = $row['depart_date'];
                                    $Person = $row['num_of_person'];
                                    $room = $row['rooms'];
                                    echo  "<br/><b> Name:" .$name. "<br/> Email :" .$email. "<br/> Phone Number:" .$phone. "<br/>
                                    Arrive date:" .$adate. "<br/> Depart date:" .$ddate. "<br/> People:" .$Person. "<br/> Room :" .$room. "</b><br/> </div>";
                                }
                                else{
                                    header("location:search_booking.php?error=infoerror");
                                }

                            }
                        }
                        
                        //Close DB Connection
                        mysqli_stmt_close($stmt);
                        mysqli_close($db_con);
                    }
                ?>
            </div>
            <div class="col-md-3 center-content">
                <h2><center>Search Your Booking</center></h2>
                <?php
				//Get all error message from url
					$error_msg = $error_info = "";
					if(isset($_GET['error'])){
						if ($_GET['error'] == "infoerror") {
							$error_info = "Please check your email or phone.May be you don't booked yet!";
                        }
                        else if($_GET['error'] == "loginerror"){
                            $error_info = "You have to log in first to check your booking!";
                        }
					}
				?>
                <form action="" class="loginForm" method="post">
                    <?php
						echo "<div class='invalid-feedback' style='display:block;'>".$error_info."</div>";  //Show error message
					?>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone:</label>
                        <input type="number" class="form-control" id="phone" placeholder="Enter Phone" name="phone" required>
                    </div>
                    <button type="submit" name="search-submit" class="btn btn-block">Search</button>
                </form>
            </div> 
            <div class="col-md-4">
                
            </div>
        </div>
    </div>
      <!-- Footer -->
    <?php
        include 'footer.php';
    ?>
</body>