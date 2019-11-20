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
    echo '<title>User</title>';
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
                        <th>Is Admin</th>
                    </tr>
                    <?php
                        $sql = "SELECT * FROM users";

                        $result = mysqli_query($db_con, $sql);
                    
                        $sl_no= 1;
                        foreach($result as $user)
                        {
                    ?>
                    <tr>
                        <td> <?php echo $user['id'];?></td>
                        <td> <?php echo $user['fullName'];?></td>
                        <td> <?php echo $user['email'];?></td>
                        <td> <?php echo $user['is_admin'];?></td>
                    </tr>
                    <?php
                            $sl_no++;
                        }
                    ?>
                </table>
            </div>
        </div>
    </div> 


</body>