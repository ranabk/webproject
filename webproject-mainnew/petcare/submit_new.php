<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "db_conn.php";

if(isset($_POST['submit_password']))
{
  $email=$_POST['email'];
  $password=$_POST['password'];
  $pass = md5($password);
  $sql = "UPDATE petowner SET password='$pass' WHERE Email='$email' ";
  $select = mysqli_query($conn, $sql);


  echo 'Password updated <br> <a href="LoginSHAHAD.php">Login</a>'; 


}
?>