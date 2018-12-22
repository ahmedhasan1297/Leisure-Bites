<?php
		$data1=array();
		$uname=$_COOKIE['test2'];
	$conn = new mysqli('localhost', 'root', '', 'database');
		 
		 if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		 }
		 $sql="SELECT * FROM pending_orders where username='$uname'";
		
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) 
			{
				{
					array_push($data1,array('token'=>$row['token'],'uname'=>$row['username'],'name'=>$row['name'],'item'=>$row['item_name'],'price'=>$row['price'],'quant'=>$row['quant'],'bill'=>$row['bill']));	
				}
			}

		} 
		else
		{
			echo "0 results";
		}
		echo json_encode($data1);
		$conn->close();
?>




