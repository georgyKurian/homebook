<?php
	require "authenticate.php";
	$con=mysqli_connect("localhost","root","","flat");
	
	// Check connection
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	$query1= "INSERT INTO `flat`.`master_table` (`sl_no`, `name`, `entered_date`, `price`, `description`, `trans_date`) VALUES (NULL,'".$_GET["by_name"]."','".$_GET["date"]."','".(-1*$_GET["amount"])."','Settled to ".$_GET["to_name"]."', CURRENT_TIMESTAMP);";
	$query2= "INSERT INTO `flat`.`master_table` (`sl_no`, `name`, `entered_date`, `price`, `description`, `trans_date`) VALUES (NULL,'".$_GET["to_name"]."','".$_GET["date"]."','".$_GET["amount"]."','Settled by ".$_GET["by_name"]."', CURRENT_TIMESTAMP);";
	mysqli_query($con,$query1);
	mysqli_query($con,$query2);
	mysqli_close($con);
	header('Location: settlement.php'); 
?>