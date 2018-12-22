<?php
$email=$_GET['email'];
$token=$_GET['token'];

$conn=new mysqli("localhost","root","","database");
//check connection
if($conn->connect_error)
{
 die("Connection failed: ".$conn->error);
}
//echo "sdalkin";
$sql="SELECT * from mail where email='$email' and token='$token'";
$query=mysqli_query($conn,$sql);
if(!empty($query))
{
//	echo "Entered in to top if";
	$row = mysqli_fetch_array($query);
	if($row['verified']==0)
	{
//		echo "Entered into 2nd if";
		$sql1="UPDATE mail set verified=1, token=' ' where email='$email'";
		$query1=mysqli_query($conn,$sql1);
		if(!empty($query1)==true)
		{	
//			echo "Entered into 3rd if";
			?><html>
			<head>
				<style type="text/css">
					.container
					{
						text-align: center;
						margin-top: 20%;
					}
				</style>
			</head>
			<body class="container">
					<div class="row">
					<h1>This email has been Verified<a href='index.php'>Click here to login</a></h1>
				</div>
			</body>
			</html><?php
		}
	}

	else if($row['verified']==1)
	{

//echo "Entered into else -if";
		$sql1="UPDATE mail set token=' ' where email='$email'";
		$query1=mysqli_query($conn,$sql1);
		if(!empty($query1))
		{	
		?><html>
			<head>
				<style type="text/css">
					.container
					{
						text-align: center;
						margin-top: 20%;
					}
				</style>
			</head>
			<body class="container">
					<div class="row">
					<h1>your email has already been verified.<a href='index.php'>Click here to login</a></h1>
				</div>
			</body>
			</html><?php
		}
	}
	else
	{
		echo "changing boolean value failed".$conn->error;
	}

}
else
{
	echo "error in verification".$conn->error;
}
?>