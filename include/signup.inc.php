<?php
if(isset($_POST["signup-submit"])){

    require 'config.php';

    $fullname = $_POST['full-name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $repass = $_POST['repass'];

    if(empty($fullname) || empty($email) || empty($pass) || empty($repass)){
        header("Location: ../signup.php?error=emptyfields&name=".$fullname. "&email=".$email);
        exit();
    }
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-z A-Z]*$/", $fullname)){
        header("Location: ../signup.php?error=invalidname&email");
        exit(); 
    }
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("Location: ../signup.php?error=emptyfields&name=".$fullname);
        exit(); 
    }
    else if(!preg_match("/^[a-z A-Z]*$/", $fullname)){
        header("Location: ../signup.php?error=emptyfields&email=".$email);
        exit(); 
    }
    else if($pass !== $repass){
        header("Location: ../signup.php?error=passwordcheck&name=".$fullname. "&email=".$email);
        exit();
    }
    else{

        $sql = "SELECT email FROM users WHERE email=?";
        $stmt = mysqli_stmt_init($db_con);
        if(!mysqli_stmt_prepare($stmt , $sql)){
            header("Location: ../signup.php?error=sqlerror");
            exit();
        }
        else{
            mysqli_stmt_bind_param($stmt, "s", $email );
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultcheck = mysqli_stmt_num_rows($stmt);

            if($resultcheck > 0){
                header("Location: ../signup.php?error=usertaken&email=".$email);
                exit();
            } 
            else{
                $sql = "INSERT INTO users (fullName , email , pass) VALUES (?, ?, ?)";
                $stmt = mysqli_stmt_init($db_con);
                if(!mysqli_stmt_prepare($stmt , $sql)){
                    header("Location: ../signup.php?error=sqlerror");
                    exit();
                }
                else{
                    $hash_pass = password_hash($pass , PASSWORD_DEFAULT );
                    mysqli_stmt_bind_param($stmt, "sss", $fullname , $email, $hash_pass);
                    mysqli_stmt_execute($stmt);
                    header("Location: ../login.php?signup=success");
                    exit();
                }
                
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($db_con);
}
// else{
//     header("Location: ../signup.php");
//     echo "error";
//     exit();
// }

?>