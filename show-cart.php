
    <?php
        if(!isset($_SESSION['email'])){
            header("Location: login.php?error=notloggedin");
            exit();
        }
        else{
            $user = $_SESSION['email'];	
        
            $sql = "SELECT FL.flight_num AS FLnumber, company, flight_type, B.id AS bookid, flight_time, B.flight_date,  departure, depart_time, arrival, arrival_time, C.flight_name AS classname, capacity, price
                    FROM flight FL,  air_class C, airplane AP , flight_booked B
                    WHERE (FL.flight_num = C.flight_num) AND (B.flight_num = C.flight_num) AND (B.class = C.flight_name) AND (FL.air_id = AP.id) 
                    AND  B.email = '$user' AND paid_status = '0'
                    ORDER BY flight_time ";

            $result = mysqli_query($db_con,$sql);
            $rowcount = mysqli_num_rows($result);
        
            if($rowcount == 0){
                echo mysqli_error($db_con);
                echo "<div class='alert alert-info'><strong>Nothing in the shopping cart : ".$rowcount."</strong></div>";
            }
            else{
                echo "<div class='alert alert-info'>You have ".$rowcount." item in the flight shopping cart</div>";
    ?>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <table class='table-hover'>
                                <thead>
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
                                </thead>
    <?php
                                while($row = mysqli_fetch_array($result)) {
                                echo "<tbody><tr>";
                                echo "<td>" . $row['flight_time'] . "</td>";
                                echo "<td>" . $row['FLnumber'] . "</td>";
                                echo "<td>" . $row['company']." ".$row['flight_type']. "</td>";
                                echo "<td>" . $row['flight_date'] . "</td>";
                                echo "<td>" . $row['departure'] . "</td>";
                                echo "<td>" . $row['depart_time'] . "</td>";
                                echo "<td>" . $row['arrival'] . "</td>";
                                echo "<td>" . $row['arrival_time'] . "</td>";
                                echo "<td>" . $row['classname'] . "</td>";
                                echo "<td>" . $row['price'] . "</td>";

                                //calculate number of remain seats
                                $seatreserved = "SELECT flight_num, class, COUNT(*)
                                FROM flight_booked B
                                WHERE B.flight_date = '".$row['flight_date']."' AND B.flight_num = '".$row['FLnumber']."'AND B.class ='".$row['classname']."' AND paid_status=1
                                GROUP BY flight_num, class";
                                $reserved = mysqli_query($db_con, $seatreserved);   
                                $reservedNumber = mysqli_fetch_array($reserved);

                                $capacity = mysqli_query($db_con, "SELECT capacity FROM air_class C WHERE C.flight_num ='".$row['FLnumber']."' AND C.flight_name= '".$row['classname']."'");
                                $capacityNumber = mysqli_fetch_array($capacity);

                                if(mysqli_num_rows($reserved)>0){            
                                    $availableNumber = $capacityNumber['capacity'] - $reservedNumber['COUNT(*)'];
                                    echo "Capacir : " .$availableNumber;
                                }else{
                                    $availableNumber = $capacityNumber['capacity'];
                                }

                                if($availableNumber>0){
                                echo    '<td>
                                            <form action="cart_delete.php" method="post">
                                                    <input type="hidden" name="bookid" value="'.$row['bookid'].'" >
                                                    <button type="submit" class="btn btn-danger">Delete</button></div>
                                            </form>        
                                        </td>';
                                }else{
                                echo "<td><button type='button' class='btn btn-warning' onclick='myFunction()'>No seat Available now</button></td>";
                                }



                                echo "</tr></tbody>";
                                }
                                echo "</table>";
                                $sql = "SELECT SUM(price)
                                                        FROM flight_booked B, air_class C
                                                        WHERE B.email = '$user' AND paid_status = 0
                                                        AND class = C.flight_name AND B.flight_num = C.flight_num";
                                $result = mysqli_query($db_con, $sql);
                                $t = mysqli_fetch_array($result);
                                echo mysqli_error($db_con);
                                $total = $t['SUM(price)'];
                                
                                echo " <form action='payment.php' method='post'>";
                                echo "<div class='row'>
                                        <div class='col-sm-4'></div>
                                        <div class='col-sm-4'><p class='lead'>Total: <span id='total'>$".$total."</span></p></div>
                                        <div class='col-sm-4'><button type='submit' class='btn btn-primary'>Pay</button></div>
                                        </div>";
                                
                                echo "</form>";
    ?>
                        </div>
                    </div>
                </div>
    <?php  
            }
            header("Location: show-cart.php");
            mysqli_close($db_con);
        }
    ?>