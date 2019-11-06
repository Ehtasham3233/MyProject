<?php
   include("db_connection.php");
   session_start();
   
   
      // username and password sent from form
      $username = $_POST['username'];
      $password = $_POST['passcode']; 

      $host = "localhost";
      $dbusername = "root";
      $dbpassword = "";
      $dbname = "login";
      //$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
    $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
    if (mysqli_connect_errno()){
    echo"Failed to connect to MySQL:".mysqli_connect_error();
    }
$sql = "SELECT id FROM admin WHERE username = '$username' and passcode = '$password'";
$result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      $count = mysqli_num_rows($result);
if ( $count==1 )
{
echo "Loggedin Sucessfull";
echo "<script> window.location.assign('index.html'); </script>";
//$sql = "INSERT INTO login (equation) VALUES ('$equal')";
}
else
{
echo "Login unsuccessful".sql."<br>".$conn->error;
}

$conn->close()
      




      
      /*if($_SERVER["REQUEST_METHOD"] == "POST") {
      $myusername = $_POST['username'];
      $mypassword = $_POST['password']; 
      
      $sql = "SELECT id FROM admin WHERE username = '$myusername' and passcode = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }*/
?>