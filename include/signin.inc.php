<?php
if(isset($_POST["signin-submit"])){

    require 'config.php';

    $email = $_POST['email'];
    $pass = $_POST['pass'];

    if (empty($email) || empty($pass)) {
        header("Location: ../login.php?error=emptyfields");
        exit();
    }
    else{
        $sql = "SELECT * FROM users WHERE email=?";
        $stmt = mysqli_stmt_init($db_con);
        if (!mysqli_stmt_prepare($stmt , $sql)) {
            header("Location: ../login.php?error=sqlerror");
            exit();
        }
        else{
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result)) {
                $passcheck = password_verify($pass, $row['pass']);
                if ($passcheck == false) {
                    header("Location: ../login.php?error=wrongpassword");
                    exit(); 
                }
                else if($passcheck == true){
                    session_start();
                    $_SESSION['userId'] = $row['id'];
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['user_type'] = $row['is_admin'];

                    // setcookie("uid" , $row['email'] , time()+60 );
                   if($_SESSION['user_type'] == 1){
                        header("Location: ../admin/booking_req.php?login=success");
                        exit(); 
                   }
                   else{
                        header("Location: ../index.php?login=success");
                        exit();
                   }

                }
                else{
                    header("Location: ../login.php?error=wrongpassword");
                    exit();
                }
            }
            else{
                header("Location: ../login.php?error=nouserfind");
                exit();
            }
        }
    }
}
else{
    header("Location: ../login.php");
    exit();
}

?>