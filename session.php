<?php
   //include('config.php');
   session_start();
   $username = $_POST['username'];
   $password = $_POST['password']; 

   $host = "localhost";
   $dbusername = "root";
   $dbpassword = "";
   $dbname = "login";
   //$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
 $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select username from admin where username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:process.php");
      die();
   }
?>