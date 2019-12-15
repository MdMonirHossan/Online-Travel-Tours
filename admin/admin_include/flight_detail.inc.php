<?php
require 'admin_config.php';

$sql = "SELECT * FROM airplane";
if(! ($result = mysqli_query($db_con, $sql)))
{
	
	echo "Errormessage: ".mysqli_error($db_con)."\n";
}
else
{
	echo "<table>
		<tr><th>ID</th>
		<th>Type</th>
		<th>Company</th></tr>";
	while($row = mysqli_fetch_array($result))
	{
		echo "<tr><td>".$row['id']."</td><td>".$row['flight_type']."</td><td>".$row['company']."</td></tr>";
	}
	echo "</table>";
}

mysqli_close($db_con);


?>