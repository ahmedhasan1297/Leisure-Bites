 <?php
       $post_email=$_POST['aemail'];
       $post_password=$_POST['apassword'];         
       $conn = new mysqli('localhost', 'root', '', 'database');        
       if($conn->connect_error) 
      {
        die("Connection failed:" .$conn->connect_error);
      } 
      $sql = "SELECT * FROM admin_table WHERE ademail='$post_email' AND adpassword='$post_password'";
      //mysql_query("INSERT INTO notice (event_date,event_type,message)VALUES(".CAST('".$today_date."'AS DATE).",'".$post_type."','".$post_msg."')") or die(mysql_error()); +
      $result = $conn->query($sql);
      if($result->num_rows==1)
        {
          //printf( $result);

        $row = $result->fetch_assoc();/*) {
            //$lname=$row["name"];
            //$password2=$row["password"];
              //echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
          }*/
           setcookie("test1","y", time() + (86400 * 30), "/");
           setcookie("test2",$row['ademail'], time() + (86400 * 30), "/"); 
           //setcookie("test3",$lname, time() + (86400 * 30), "/");
           //echo "sdgdfb";
           header('location:admin.php');
        }   
      else
      {
        echo "fail to create cookie for admin";
       // header("Location:index.php");
      } 
    ?>