<?php
		$data1=array();
		$conn = new mysqli('localhost', 'root', '', 'database');
		 
		 if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		 } 
		 $sql = "SELECT  AVG(quality),AVG(atmo),AVG(service),AVG(value) FROM review";
		 $result = $conn->query($sql);
		 if ($result->num_rows > 0) 
		 {
		    
		    while($row = $result->fetch_assoc()) {
		        array_push($data1,(object)array('quality'=>$row['AVG(quality)'],'atmo'=>$row['AVG(atmo)'],'value'=>$row['AVG(value)'],'service'=>$row['AVG(service)']));
		    }
		 } else 
		 {
		    echo "0 results";
		 }
		 echo json_encode($data1);
?>