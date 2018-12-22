<?php
		$name=$_POST["name"];
		$price=$_POST["price"];
		$id=$_POST["id"];
		$category=$_POST["category"];

		$conn = new mysqli('localhost', 'root', '', 'database');
		 
		 if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		 } 

		 $sql="UPDATE data SET name='$name', price='$price', category='$category' where id='$id'";

		 if ($conn->query($sql) === TRUE) {
    		//echo "New record created successfully";
		} else {
    		//echo "Error: " . $sql01 . "<br>" . $conn->error;
		}

?>