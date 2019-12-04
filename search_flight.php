<?php
    session_start();
    require 'include/config.php'; //DB configuration & connect

    // include header and title
    include 'header.php';
    echo '<title>Search Flight</title>';
?>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12 table-responsive">
                <?php
                    if(isset($_POST['search_all_submit'])){
                        $selectdate = $_POST["selectdate"];

                        $sql = "SELECT * 
                        FROM flight FL,  air_class C, airplane AP 
                        WHERE (FL.flight_num = C.flight_num) AND (FL.air_id = AP.id) 
                        
                        ORDER BY FL.flight_num";

                        $result = mysqli_query($db_con,$sql);
                        $rowcount = mysqli_num_rows($result);

                        if($rowcount == 0){
                            echo "<div class='alert alert-info'><strong>Search Result: </strong>".$rowcount." result</div>";
                        }
                        else{
                            echo "<div class='alert alert-info'><strong>Search Result: </strong>".$rowcount." results</div>";
                ?>
                        
                            <table class=''>
                                <tr>
                                    <th>Flight</th>
                                    <th>Aircraft</th>
                                    <th>Date</th>
                                    <th>Departure</th>
                                    <th>Departure Time</th>
                                    <th>Arrival</th>
                                    <th>Arrival Time</th>
                                    <th>Class</th>
                                    <th>Capacity</th>
                                    <th>Price</th>
                                    <th>Remain Seats</th>
                                    <th>Reserve</th>
                                </tr>
                <?php
                                while($row = mysqli_fetch_array($result)) {
                                    echo "<tr>";
                                    echo "<td>" . $row['flight_num'] . "</td>";
                                    echo "<td>" . $row['company']." ".$row['type']. "</td>";
                                    echo "<td>" . $selectdate . "</td>";
                                    echo "<td>" . $row['departure'] . "</td>";
                                    echo "<td>" . $row['depart_time'] . "</td>";
                                    echo "<td>" . $row['arrival'] . "</td>";
                                    echo "<td>" . $row['arrival_time'] . "</td>";
                                    echo "<td>" . $row['flight_name'] . "</td>";
                                    echo "<td>" . $row['capacity'] . "</td>";
                                    echo "<td>" . $row['price'] . "</td>";

                                    //calculate number of remain seats
                                    $seatreserved = "SELECT flight_num, class, COUNT(*)
                                    FROM flight_booked B
                                    WHERE B.date = '".$selectdate."' AND B.flight_num = '".$row['flight_num']."'AND B.class ='".$row['flight_name']."' AND paid_status=1
                                    GROUP BY flight_num, class";
                                    $reserved = mysqli_query($db_con, $seatreserved);   
                                    $reservedNumber = mysqli_fetch_array($reserved);

                                    $capacity = mysqli_query($db_con, "SELECT capacity FROM air_class C WHERE C.flight_num='".$row['flight_num']."' AND C.flight_name= '".$row['flight_name']."'");
                                    $capacityNumber = mysqli_fetch_array($capacity);


                                    if(mysqli_num_rows($reserved)>0){            
                                    $availableNumber = $capacityNumber['capacity'] - $reservedNumber['COUNT(*)'];
                                    }else{
                                    $availableNumber = $capacityNumber['capacity'];
                                    }

                                    echo "<td>".$availableNumber."</td>";

                                    if($availableNumber>0){
                ?>
                                    <td>
                                        <form action="shopping_cart.php" method="post">
                                            <input type="hidden" name="flightno" value="<?php echo $row['flight_num']; ?>">
                                            <input type="hidden" name="time" value="<?php echo $row['flight_time']; ?>">
                                            <input type="hidden" name="name" value="<?php echo $row['flight_name'];?>">
                                            <input type="hidden" name="flight-type" value="<?php echo $row['flight_type'] ." " .$row['company']; ?>">
                                            <input type="hidden" name="depart" value="<?php echo $row['departure']; ?>">
                                            <input type="hidden" name="depart-time" value="<?php echo $row['depart_time']; ?>">
                                            <input type="hidden" name="arrival" value="<?php echo $row['arrival']; ?>">
                                            <input type="hidden" name="arrival-time" value="<?php echo $row['arrival_time']; ?>">
                                            <input type="hidden" name="classtype" value="<?php echo $row['flight_name']; ?>">
                                            <input type="hidden" name="price" value="<?php echo $row['price']?>">
                                            <input type="hidden" name="date" value="<?php echo $selectdate ?>">
                                            <input type="hidden" name="type" value="all">
                                            <button name="cart-submit" type="submit" class="btn btn-primary">Add to Cart</button>
                                        </form>
                                    </td>
                <?php
                                    }else{
                                        echo "<td><button type='button' class='btn btn-warning' onclick='myFunction()'>Not Available</button></td>";
                                    }
                                }
                                echo "</tr>";
                            echo "</table>";
                        }  
                            
                        mysqli_close($db_con);
                    }
                ?>
            </div>
        </div>
    </div>
    <?php
        include "footer.php";
    ?>
</body>