<?php
include_once 'admin_config.php';

$sql = "SELECT * FROM airport";
if(! ($result = mysqli_query($db_con, $sql)))
{
	
	echo "Errormessage: ".mysqli_error($db_con)."\n";
}
else
{
	echo "<table>
		<tr><th>code</th>
		<th>name</th>
		</tr>";
	while($row = mysqli_fetch_array($result))
	{
		echo "<tr><td>".$row['code']."</td><td>".$row['name']."</td></tr>";
	}
	echo "</table>";
}

mysqli_close($db_con);


?>