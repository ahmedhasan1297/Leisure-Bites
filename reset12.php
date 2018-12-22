<?php
 	
	//$password=$_POST['password'];
	$conn = new mysqli('localhost', 'root', '', 'project');
	$email=$_POST['mail'];
 	$password=$_POST['password'];
 	echo $email;
 	echo $password;
	// Check connection
	//echo "Hai in database";
	if ($conn->connect_error) 
	{
		die("Connection failed: " . $conn->connect_error);
	} 
	$sql = "UPDATE login set password='$password' where uemail='$email' ";
	//echo $grp_id." ".$uemail." ".$cemail."<br>";
	if($conn->query($sql))
	{
		echo "Updated Successfully";
		
	}	
    else
    {
    	echo "Problem With Deletion Please try after some time";	
    }	
?>