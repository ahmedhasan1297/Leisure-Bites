<?php
		$selected=$_POST["selected"];
		$decod=html_entity_decode($selected);
		$array=json_decode($decod,true);
		$bill=$_POST["bill"];
		$token=$_POST["token"];
		$uname=$_COOKIE['test2'];
		$name1=$_COOKIE['test3'];
		for($i=0;$i<sizeof($array); $i++)
		{
			 $name[$i]= $array[$i]['name'];
			 $price[$i]=$array[$i]['price'];
			 $quant[$i]=$array[$i]['quant'];
		}


		$conn = new mysqli('localhost', 'root', '', 'database');
		 
		 if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		 }
		 $sql1="select phoneno from login where email='$uname'";
		 $result1 = $conn->query($sql1);
		 if($result1->num_rows > 0)
		 {
		 	 $row1 = $result1->fetch_assoc();{
		 	 	$phoneno=$row1['phoneno'];
    		}
		 }
		 else
		 {
		 	echo "Error: " . $sql1 . "<br>" . $conn->error;
		 }
		 for($i=0;$i<sizeof($name);$i++)
			 {
			 	$sql="INSERT INTO pending_orders (token,username,phoneno,name,item_name,price,quant,bill) VALUES ('$token','$uname','$phoneno','$name1','$name[$i]','$price[$i]','$quant[$i]','$bill')";	
			 	if ($conn->query($sql) === TRUE) {
	    			//echo "New record created successfully";
				} else {
	    			echo "Error: " . $sql . "<br>" . $conn->error;
				}
			 }
?>