<?php
$db_server_name = "localhost";
$db_user_name = "root";
$db_password = "root";
$db_name = "online_travel_agency";
$db_con = mysqli_connect($db_server_name, $db_user_name, $db_password, $db_name);

if(!$db_con){
    die("Database Connection Error : " .mysqli_connect_error());
}

?>