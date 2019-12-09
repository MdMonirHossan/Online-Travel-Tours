<?php
    require "admin_config.php";

    $flightno = $_GET['flightno'];

    $sql = "SELECT * FROM flight WHERE flight_num = '$flightno'";
    if(! ($result = mysqli_query($db_con, $sql)))
    {
        
        echo "Errormessage: ".mysqli_error($db_con)."\n";
    }
    else
    {
        while($row = mysqli_fetch_object($result))
        {
            $var[] = $row;	
        }
        echo '{"flights":'.json_encode($var).' , ';
    }

    $var2 = array();
    $sql = "SELECT * FROM air_class WHERE flight_num = '$flightno'";
    if(! ($result = mysqli_query($db_con, $sql)))
    {
        echo "Errormessage: ".mysqli_error($db_con)."\n";
    }
    else
    {
        while($row = mysqli_fetch_object($result))
        {
            $var2[] = $row;	
        }
        echo '"classes":'.json_encode($var2).'}';
    }

    mysqli_close($db_con);


?>