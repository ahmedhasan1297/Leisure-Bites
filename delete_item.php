<?php
		$name=$_POST["name"];
		$price=$_POST["price"];
		$id=$_POST["id"];

		$conn = new mysqli('localhost', 'root', '', 'database');
		 
		 if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		 } 

		 $sql="DELETE FROM data WHERE name='$name' and id='$id'";


		 if ($conn->query($sql) === TRUE) {
    		//echo "New record created successfully";
		} else {
    		//echo "Error: " . $sql01 . "<br>" . $conn->error;
		}

?>