<?php
    // GET all value through hmlhttp submit
    $flight_no = $_GET['flightno'];
    $airplane_id = $_GET['airplaneid'];
    $departure = $_GET['departure'];
    $de_time = $_GET['dtime'];
    $arrival = $_GET['arrival'];
    $a_time = $_GET['atime'];
    $ec = $_GET['ec'];
    $ep = $_GET['ep'];
    $bc = $_GET['bc'];
    $bp = $_GET['bp'];
    $economy = 'Economy';
    $business = 'Business';

    require 'admin_config.php';  //DB Configure
    
        // Insert into flight
    $sql = "INSERT INTO flight (flight_num , air_id , departure , depart_time, arrival, arrival_time ) 
                VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($db_con);
    if(!mysqli_stmt_prepare($stmt , $sql)){   //DB Error
        header("Location: ../add_flight.php?error=sqlerror");
        echo"erroor".mysqli_error($db_con);
        exit();
    }
    else{
        // DB Connection Success
        mysqli_stmt_bind_param($stmt, "ssssss", $flight_no , $airplane_id, $departure, $de_time, $arrival, $a_time );
        mysqli_stmt_execute($stmt);
        header("Location: ../add_flight.php?add=success");
    }
     // Insert one row for economy class into air_class
    $sql = "INSERT INTO air_class (flight_num , flight_name , capacity , price) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($db_con);
    if(!mysqli_stmt_prepare($stmt , $sql)){
        header("Location: ../add_flight.php?error=sqlerror");
        exit();
    }
    else{
        // DB Connection Success
        mysqli_stmt_bind_param($stmt, "ssss", $flight_no , $economy, $ec, $ep);
        mysqli_stmt_execute($stmt);
        header("Location: ../add_flight.php?add=success");
    }
    // Insert another row at the same time for business class into air_class
    $sql = "INSERT INTO air_class (flight_num , flight_name , capacity , price) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($db_con);
    if(!mysqli_stmt_prepare($stmt , $sql)){
        header("Location: ../add_flight.php?error=sqlerror");
        exit();
    }
    else{
        // DB Connection Success
        mysqli_stmt_bind_param($stmt, "ssss", $flight_no , $business, $bc, $bp);
        mysqli_stmt_execute($stmt);
        header("Location: ../add_flight.php?add=success");
    }
    //Close DB Connection
    mysqli_stmt_close($stmt);
    mysqli_close($db_con);
?>