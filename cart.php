<?php

    include "header.php";
    
    require 'include/config.php'; //DB configuration & connect

    // check login status
    if(!isset($_SESSION['email'])){
		header("Location: ../index.php?error=loginerror");
		echo "You must login first";
		exit();
    }

    $num = $_POST['flightno'];
    $time = $_POST['time'];
    $name = $_POST['name'];
    $flight_type = $_POST['flight-type'];
    $depart = $_POST['depart'];
    $depart_time = $_POST['depart-time'];
    $arrival = $_POST['arrival'];
    $arrival_time = $_POST['arrival-time'];
    $class = $_POST['classtype'];
    $price = $_POST['price'];
    $date = $_POST['date'];
    $type = $_POST['type'];

    if(isset($_POST['cart-submit'])){
        $user = $_SESSION['email'];

        if($type =="all" || $type =="onewaynonstop" ){

            setcookie("num", $num, time() + (86400 * 30), "/");
            setcookie("name", $name, time() + (86400 * 30), "/");
            setcookie("time", $time, time() + (86400 * 30), "/");
            setcookie("type", $flight_type, time() + (86400 * 30), "/");
            setcookie("depart", $depart, time() + (86400 * 30), "/");
            setcookie("d_time", $depart_time, time() + (86400 * 30), "/");
            setcookie("arrival", $arrival, time() + (86400 * 30), "/");
            setcookie("a_time", $arrival_time, time() + (86400 * 30), "/");
            setcookie("class", $class, time() + (86400 * 30), "/");
            setcookie("price", $price, time() + (86400 * 30), "/");
            setcookie("date", $date, time() + (86400 * 30), "/");
            
            
        }
    }

    if(isset($_COOKIE['num'])){
        echo "Name: " .$_COOKIE['num'];
        echo "Class: " .$_COOKIE['class'];
        echo "Price: " .$_COOKIE['price'];
        echo "Date: " .$_COOKIE['date'];
        echo "Name: " .$_COOKIE['num'];
        echo "Name: " .$_COOKIE['num'];
    }
?>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class='table table-bordered table-striped table-hover'>
                        <tr>
                            <th>Time</th>
                            <th>Flight</th>
                            <th>Aircraft</th>
                            <th>Date</th>
                            <th>Departure</th>
                            <th>Departure Time</th>
                            <th>Arrival</th>
                            <th>Arrival Time</th>
                            <th>Class</th>
                            <th>Price</th>
                            <th>Pay</th>
                        </tr>
                        <tr>
                            <td><?php echo $_COOKIE['time']; ?></td>
                            <td><?php echo $_COOKIE['num']; ?></td>
                        </tr>
                        <tr></tr>
                </table>
            </div>
        </div>
    </div>
</body>