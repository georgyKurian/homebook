<?php 
	function sumUp($userName){
		require "database_connection.php";
			
		// Check connection
		if (mysqli_connect_errno()) {
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
		$query = "SELECT sum(price) FROM `master_table` WHERE name='".$userName."'";
		$result = mysqli_query($con,$query);
		while($row = mysqli_fetch_array($result)) {
			echo $row['sum(price)'];
		}
		mysqli_close($con);
	}
?>