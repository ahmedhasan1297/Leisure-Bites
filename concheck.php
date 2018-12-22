 <?php
       $post_email=$_POST['lemail'];
       $post_password=$_POST['lpassword'];         
       $conn = new mysqli('localhost', 'root', '', 'database');        
       if($conn->connect_error) 
      {
        die("Connection failed:" .$conn->connect_error);
      } 
      $sql = "SELECT name,email,password FROM login WHERE email='$post_email' AND password='$post_password'";
      //mysql_query("INSERT INTO notice (event_date,event_type,message)VALUES(".CAST('".$today_date."'AS DATE).",'".$post_type."','".$post_msg."')") or die(mysql_error()); +
      $result = $conn->query($sql);
      if($result->num_rows>0)
        {
          //printf( $result);

          while($row = $result->fetch_assoc()) {
            $lname=$row["name"];
            //$password2=$row["password"];
              //echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
          }
           setcookie("test1","x", time() + (86400 * 30), "/");
           setcookie("test2",$post_email, time() + (86400 * 30), "/"); 
           setcookie("test3",$lname, time() + (86400 * 30), "/");
           //echo "sdgdfb";
           header('location:dashboard.php');
        }   
      else
      {
       // echo "fail";
        header("Location:index.php");
      } 
    ?>