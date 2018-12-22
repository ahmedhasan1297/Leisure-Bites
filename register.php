<?php
	require 'PHPMailerAutoload.php';
	$mail = new PHPMailer;
	$fname=$_POST['name'];
	$uemail=$_POST['email'];
	$password=$_POST['pwd'];
	$phnno=$_POST['phno'];
	//creating a connection to database
	$conn=new mysqli("localhost","root","","database");
	//check connection
	if($conn->connect_error)
	{
		die("Connection failed: ".$conn->error);
	}
	$sql="INSERT INTO login (name, email, password, phoneno) VALUES ( '$fname', '$uemail', '$password', '$phnno')";
	//executing and checking if the query executed 
	if ($conn->query($sql))
	{
		//check connection
		if($conn->connect_error)
		{
		 	die("Connection failed: ".$conn->error);
		}
		
		//$mail->SMTPDebug = 3;                               // Enable verbose debug output
		function gRS($length = 30) 
		{
		    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		    $charactersLength = strlen($characters);
		    $randomString = '';
		    for ($i = 0; $i < $length; $i++)
		    {
		       $randomString .= $characters[rand(0, $charactersLength - 1)];
		    }
		    return $randomString;
		}
		$token=gRS();

		$sql="INSERT INTO mail (email, name, token) VALUES ( '$uemail', '$fname', '$token')";

		

		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = 'canteenpro1530@gmail.com';                 // SMTP username
		$mail->Password = 'Canteen1530';                           // SMTP password
		$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
		$mail->Port = 587;                                    // TCP port to connect to

		$mail->setFrom('canteenpro1530@gmail.com', 'Canteen');
		$query = mysqli_query($conn,$sql);
		if(!empty($query)) 
		{
			$ip='192.168.0.6';
			echo "Token has been Updated";
			//write your code here
			 
			//$mail->addAddress($row['email'],$row['name']);     // Add a recipient
			$mail->addAddress($uemail);  
			//$mail->addAddress('iamag3sd@gmail.com');               // Name is optional
			//$mail->addReplyTo('info@example.com', 'Information');
			//$mail->addCC('cc@example.com');
			//$mail->addBCC('bcc@example.com');

			//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
			//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
			$mail->isHTML(true);                                  // Set email format to HTML
			//echo "in between sending mail";
			$mail->Subject = 'Here is the subject';
			$mail->Body    = "Please verify your email <a href='$ip/Leisure Bite/check.php?token=$token&email=$uemail'>click here</a>";//include your data here
			$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
			//
			$mail->smtpConnect(
			    array(
			        "ssl" => array(
			            "verify_peer" => false,
			            "verify_peer_name" => false,
			            "allow_self_signed" => true
			        )
			    )
			);
			//
			if(!$mail->send())
			{
			    echo 'Message could not be sent.';
			    echo 'Mailer Error: ' . $mail->ErrorInfo;
			} 
			else
			{
			    echo 'Message has been sent';
			}
		}
		else
		{
		 	echo "Error:" .$sql1. "<br>" . $conn->error;
		}
		//header('Location: index.php');
	}
	else
	{
		echo "Error:" .$sql. "<br>" . $conn->error;
		//header('Location: index.php');
	}
	mysqli_close($conn);
?>