<?php
    if(isset($_POST["search-submit"])){

        require 'config.php';

        $email = $_POST['email'];
        $phone = $_POST['phone'];

        $sql ="SELECT * FROM bookng_request WHERE email like'%$email%' AND phone = '$phone' ";

        $stmt = mysqli_stmt_init($db_con);
        if(!mysqli_stmt_prepare($stmt , $sql)){
            header("Location: ../search_booking.php?error=sqlerror");
            exit();
        }
        else{
            mysqli_stmt_bind_param($stmt, "ss", $email , $phone );
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            if($row = mysqli_fetch_assoc($result)){
                echo "<br/>'<h1>' Result found </h1><br/>";
                $name = $row['fullname'];
                $email = $row['email'];
                $phone = $row['phone'];
                $adate = $row['arrival_date'];
                $ddate = $row['depart_date'];
                $Person = $row['num_of_person'];
                $room = $row['rooms'];
                echo  "<br/>'<h3>' Name: $name <br/> Email : $email <br/> Phone Number: $phone <br/>
                Arrive date: $adate<br/> Depart date: $ddate<br/> People: $Person <br/> Room : $room '</h3>'<br/> ";
            }
            else{
                echo "No resutls";
            }

        }
        mysqli_stmt_close($stmt);
        mysqli_close($db_con);
    }
?>