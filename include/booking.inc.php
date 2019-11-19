<?php
if(isset($_POST["booking-submit"])){

    require 'config.php';

    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $arrival = $_POST['arrival'];
    $depart = $_POST['depart'];
    $person = $_POST['person'];
    $room = $_POST['room'];

    if(!preg_match("/^[a-z A-Z]*$/", $fullname) && !preg_match("/^[0]{1}[1]{1}[3-9]{1}[0-9]{8}$/", $phone)){
        header("Location: ../bookform.php?error=namephone");
        exit();
    }
    else if(!preg_match("/^[a-z A-Z]*$/", $fullname)){
        header("Location: ../bookform.php?error=nameerror");
        exit(); 
    }
    else if(!preg_match("/^[0]{1}[1]{1}[3-9]{1}[0-9]{8}$/", $phone)) {
        header("Location: ../bookform.php?error=invalidphone");
        exit();
    }
    else{
        $sql = "INSERT INTO bookng_request (fullName , email , phone , cu_address , arrival_date, depart_date , num_of_person, rooms) 
                    VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_stmt_init($db_con);
        if(!mysqli_stmt_prepare($stmt , $sql)){
            header("Location: ../bookform.php?error=sqlerror");
            exit();
        }
        else{
            mysqli_stmt_bind_param($stmt, "ssssssss", $fullname , $email, $phone, $address, $arrival, $depart, $person, $room);
            mysqli_stmt_execute($stmt);
            header("Location: ../payment.php?booking=success");
            exit();
        }
    }
    
    mysqli_stmt_close($stmt);
    mysqli_close($db_con);

}

?>