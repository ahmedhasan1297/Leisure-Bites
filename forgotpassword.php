<?php
	require 'PHPMailerAutoload.php';
	$mail = new PHPMailer;
	$uemail=$_POST['email'];
	$conn=new mysqli("localhost","root","","database");
	//check connection
	if($conn->connect_error)
	{
		die("Connection failed: ".$conn->error);
	}
	$sql="SELECT * from mail where email='$uemail'";
	//$query=mysqli_query($conn,$sql);
	//executing and checking if the query executed 
	if ($conn->query($sql))
	{

	//	$uemail='pavannadipineni1@gmail.com';
	//	$conn=new mysqli("localhost","root","","test");
		//check connection		
		//$mail->SMTPDebug = 3;                               // Enable verbose debug output
		function gRS($length = 25) 
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
		$passwordtoken=gRS();

		$sql1="UPDATE mail set passwordtoken='$passwordtoken' where email='$uemail'";

		

		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = 'canteenpro1530@gmail.com';                 // SMTP username
		$mail->Password = 'Canteen1530';                           // SMTP password
		$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
		$mail->Port = 587;                                    // TCP port to connect to

		$mail->setFrom('canteenpro1530@gmail.com', 'Canteen_order');
		$query = mysqli_query($conn,$sql1);
		if(!empty($query)) 
		{
			$ip='170.50.6.210';
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
			$mail->Body    = "<a href='$ip/project canteen ver 11/resetpassword.php?passwordtoken=$passwordtoken&email=$uemail'>click here to reset your password</a>";//include your data here
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
			    echo ' Mail has been sent<br>
			    <h1>A password reset link will be send to your mail. Please check your mail to reset your password.</h1>';
			}
		}
		else
		{
		 	echo "Error:" .$sql1. "<br>" . $conn->error;
		}
	}
	else
	{
		echo "Error:" .$sql. "<br>" . $conn->error;
//		header('Location: index.php');
	}
	mysqli_close($conn);
?>