	
		<?php
			
			require "authenticate.php";

			echo "Name :",$_POST["name"],"<br>";
			echo "Amount :",$_POST["amount"],"<br>";
			echo "Description :",$_POST["description"],"<br>";
			echo "Date :",$_POST["date"],"<br>";
			$con=mysqli_connect("localhost","root","","flat");
			
			// Check connection
			if (mysqli_connect_errno()) {
			  echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}
			$query= "INSERT INTO `flat`.`master_table` (`name`, `entered_date`, `price`, `description`, `trans_date`) VALUES ( '".$_POST["name"]."', '".$_POST["date"]."', '".$_POST["amount"]."', '".$_POST["description"]."', CURRENT_TIMESTAMP);";
			echo	$query;
			mysqli_query($con,$query);
			mysqli_close($con);
			header('Location: home.php'); 
		?>