<?php
		$data1=array();
		$conn = new mysqli('localhost', 'root', '', 'database');
		 
		 if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		 } 
		 $sql = "SELECT  * FROM data ";
		 $result = $conn->query($sql);
		 if ($result->num_rows > 0) 
		 {
		    
		    while($row = $result->fetch_assoc()) {
		    	$photo="img/".$row['name'].".jpg";
		        array_push($data1,array('name'=>$row['name'],'photo'=>$photo,'price'=>$row['price'],'category'=>$row['category'],'quant'=>$row['quant'],'id'=>$row['id']));
		    }
		 } else 
		 {
		    echo "0 results";
		 }
		 echo json_encode($data1);
?>