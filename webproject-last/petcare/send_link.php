<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

include "db_conn.php";

if(isset($_POST['Email']))
{
 $Email = $_POST['Email'];
 $sql = "SELECT Email, password FROM petowner WHERE Email='$Email' ";
 $select = mysqli_query($conn, $sql);
 if(mysqli_num_rows($select)==1)
 {
  while($row=mysqli_fetch_array($select))
  {
    // $email=md5($row['Email']);
    $email=$row['Email'];
    $pass=md5($row['password']);
  }

  $msg= "<a href='petcare/ResetPassword.php?key=".$email."&reset=".$pass."'>Click here To Reset password</a>";

  $headers  = 'MIME-Version: 1.0' . "\r\n";
  $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
  $headers .= 'From: Pet Care - Reset Password <noreply@petcare.com>' . "\r\n";
  ini_set('display_errors','0');
  mail($Email,"Pet Care - Reset Password",$msg, $headers);

  echo 'Email has been sent <br> <a href="LoginSHAHAD.php">Go back</a>'; 

} else {
    echo 'Email does not exist. <br> <a href="SignUpSHAHAD.php">Create an account</a>';
}
}
?>