<?php
  define('SITEURL','https://localhost/web-project/');
  /*define('LOCALHOST','localhost');
  define('DB_USERNAME','reemaalsaliem');
  define('DB_PASSWORD','Rreema123');
  define('DB_NAME','PetWeb'); */
  $conn =mysqli_connect('localhost','root',''); //edit info later
  $db_select =mysqli_select_db($conn,'PetWeb'); //if doesnt work then step is missing not copied

  $ID= $_GET['id'];
  $sql="UPDATE Appointments SET Status= 'Denied' WHERE ID=$ID";
  $result= mysqli_query($conn,$sql); //add sql to delete from pet owner table too?
  
  if ($result==true){
      $_SESSION['delete']="Request denied successfully";
      header("location:".SITEURL."RequestedApptHind.php");
      
  }
  else{
    $_SESSION['delete']="Operation failed";
    header("location:".SITEURL."RequestedApptHind.php");
  }

  ?>