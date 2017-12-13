<?php
	require "authenticate.php";
?>
<!DOCTYPE HTML>
<html>
<head>
</head>

<body style="text-align: center">
<style>
table {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    width: 100%;
    border-collapse: collapse;
}

table td, table th {
    border: 1px solid #98bf21;
}

/*table th {
    padding :0px 25px;
    background-color: #A7C942;
    color: #ffffff;
}*/
 
tr:nth-child(even) {
    color: #000000;
    background-color: #EAF2D3;
}

tr:nth-child(odd) {
    color: #000000;
    background-color: #A7C942;
}

hr{

background-color:#444;
height:2px;
-webkit-box-shadow: 1px 1px 1px #ffffff;


}
</style>
<?php 
	if(isset($_GET["date1"])){
		$date_from=$_GET["date1"];
		$date_to=$_GET["date2"];
	}
	else{
		$date_from=date("Y-m-d");
		$date_to=date("Y-m-d");
	}
	include "database_connection.php";
	$query = "SELECT * FROM `master_table` WHERE `entered_date`>='".$date_from."' AND `entered_date`<='".$date_to."'";
	$result = mysqli_query($con,$query);
?>
<div  style="font-size: 25px;;background:red;color:white;margin-bottom: 20px">TRANSACTIONS</div>

<hr>

<form name="input" action="display.php" method="get" style="text-align:left;   ">
Select dates <br/>From :<input type="date" name="date1" value="<?php echo $date_from; ?>" ><br/>To   :<input type="date" name="date2" value="<?php echo $date_to; ?>"><br>
<input type="submit" value="Retrive Data" style="cursor:pointer">
</form>

<hr>

<div >
<?php
	echo "From :".$date_from."<br/>To :".$date_to ;
?>
<table id="customers">
  <?php
	$i=1;
	while($row = mysqli_fetch_array($result)) {
		echo "<tr>";
		echo "<th>".$i."</th><th>".$row['name']."</th><th>".$row['entered_date']."</th><th>".$row['price']."</th><th>".$row['description']."</th><th>".$row['trans_date']."</th>";
		echo "</tr>";
		$i++;
	}
  ?>
 
<table>


</div>

</body>

</html>
<?php
	mysqli_close($con);
?>