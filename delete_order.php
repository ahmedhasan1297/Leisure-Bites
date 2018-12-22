<?php
		$name=$_POST["name"];
		$token=$_POST["token"];

		$conn = new mysqli('localhost', 'root', '', 'database');
		 
		 if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		 } 

		 $sql="DELETE FROM pending_orders WHERE username='$name' and token='$token'";


		 if ($conn->query($sql) === TRUE) {
		 	
		} else {

		}

?>