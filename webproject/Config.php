

<meta charset="utf-8" />
<?php
   $host= 'localhost';
   $username= 'root';
   $password='';
   $db_name='PetWeb';
   
   $conn= mysqli_connect($host,$username,$password,$db_name);
		   
		   if(!$conn){
			   
			   echo mysqli_connect_error("failed to connect") . mysqli_connect_errno();
		  
		   }
		   
		   function close_db(){
		   global $conn;
		   mysqli_close($conn);}

?>