<?php
    session_start();
    require '../include/config.php';

	if($_SESSION['user_type'] != 1 && !isset($_SESSION['email'])) {
		header("Location: ../index.php?error=loginerror");
		echo "You must login first";
		exit();
	}
	else if(!isset($_SESSION['email'])){
		header("Location: ../index.php?error=loginerror");
		echo "You must login first";
		exit();
	}
    // include header and title
    include 'admin_header.php';
    echo '<title>Booking Request</title>';
?>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12" style="overflow-x:auto;">
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Arrival_date</th>
                        <th>Depart_date</th>
                        <th>Persons</th>
                        <th>Room Type</th>
                    </tr>
                    <?php
                        $sql = "SELECT * FROM bookng_request";

                        $result = mysqli_query($db_con, $sql);
                    
                        $sl_no= 1;
                        foreach($result as $request_room)
                        {
                    ?>
                    <tr>
                        <td> <?php echo $request_room['id'];?></td>
                        <td> <?php echo $request_room['fullname'];?></td>
                        <td> <?php echo $request_room['email'];?></td>
                        <td> <?php echo $request_room['phone'];?></td>
                        <td> <?php echo $request_room['cu_address'];?></td>
                        <td> <?php echo $request_room['arrival_date'];?></td>
                        <td> <?php echo $request_room['depart_date'];?></td>
                        <td> <?php echo $request_room['num_of_person'];?></td>
                        <td> <?php echo $request_room['rooms'];?></td>
                    </tr>
                    <?php
                            $sl_no++;
                        }
                    ?>
                </table>
            </div>
        </div>
    </div>

    <?php
        include 'footer.php';
    ?>
</body>