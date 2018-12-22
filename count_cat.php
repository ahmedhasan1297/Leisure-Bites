<?php
		$data1=array();
		$conn = new mysqli('localhost', 'root', '', 'database');
		 
		 if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		 }
		 $colors = array("tiffins", "south_indian", "north_indian", "juices","ice_creams","chat","bakery","pizza","chinese"); 
 		foreach ($colors as $value)
 		{
	 		$sql = "SELECT  count(category) FROM data where category='$value'";
			 $result = $conn->query($sql);
			 if ($result->num_rows > 0) 
			 {
			    
			    while($row = $result->fetch_assoc()) {
			        array_push($data1,array($value=>$row['count(category)']));
			    }
			 } else 
			 {
			    echo "0 results";
			 }
 		}
		 
		 echo json_encode($data1);
?>