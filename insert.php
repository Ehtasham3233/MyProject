<?php
include 'db_connection.php';
$username = $_POST['username'];
$password = $_POST['password'];
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "web engineering";
$conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
if (mysqli_connect_errno()){
  echo"Failed to connect to MySQL:".mysqli_connect_error();
  }
	
$sql = "INSERT INTO login (Username, Password) VALUES ('$username','$password')";
/* INSERT INTO table_name (column1, column2, column3, ...)
VALUES (value1, value2, value3, ...);*/
if ( $conn->query($sql)=== TRUE )
{
echo "New record is inserted successfully";
}
else
{
echo "Error Inserting record".sql."<br>".$conn->error;
}