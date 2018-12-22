<?php
		$name=$_POST["item"];
		$price=$_POST["price"];
		$category=$_POST["category"];
		$conn = new mysqli('localhost', 'root', '', 'database');
		 
		 if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		 } 
		 $sql="INSERT INTO data VALUES ('$name','$price','$category','0','')";

		 if ($conn->query($sql) === TRUE) {
    		echo "New record created successfully";
		} else {
    		echo "Error: " . $sql01 . "<br>" . $conn->error;
		}
		 
?>