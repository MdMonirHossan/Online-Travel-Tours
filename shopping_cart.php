<?php

    session_start();
    require 'include/config.php'; //DB configuration & connect

    // check login status
    if(!isset($_SESSION['email'])){
		header("Location: ../index.php?error=loginerror");
		echo "You must login first";
		exit();
    }
    
    $type = $_POST["type"];
    date_default_timezone_set("Bangladesh/Dhaka");
    $t=time();
    $time = date("Y-m-d h:i:s");

    if(!isset($_SESSION['email'])){
        header("Location: login.php?error=notloggedin");
    }else{
        $user = $_SESSION['email'];


        if($type =="all" || $type =="onewaynonstop" ){
            $flightno = $_POST["flightno"];
            $class = $_POST["classtype"];
            $price = $_POST["price"];
            $date = $_POST["date"];

            $sql = "INSERT INTO flight_booked (flight_time, flight_date, flight_num, email, class, paid_status) 
                    VALUES ('$time', '$date', '$flightno', '$user', '$class', '0')";

            $result = mysqli_query($db_con,$sql);
            header("Location: show-cart.php");
        }
    }

?>