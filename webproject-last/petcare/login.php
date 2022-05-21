<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['Email']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$Email = validate($_POST['Email']);
	$pass = validate($_POST['password']);

	if (empty($Email)) {
		header("Location: LoginSHAHAD.php?error=Email is required");
	    exit();
	}else if(empty($pass)){
        header("Location: LoginSHAHAD.php?error=Password is required");
	    exit();
	}else{
		// hashing the password
        $pass = md5($pass);

		$sql = "SELECT * FROM petowner WHERE Email='$Email' AND password='$pass'";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['Email'] === $Email && $row['password'] === $pass) {
            	$_SESSION['FirstName'] = $row['FirstName'];
            	$_SESSION['LastName'] = $row['LastName'];
            	$_SESSION['Email'] = $row['Email'];
            	$_SESSION['ID'] = $row['ID'];
            	header("Location: petOwnerApptRana.php");
		        exit();
            }else{
				header("Location: LoginSHAHAD.php?error=Incorect Email or password");
		        exit();
			}
		}else{
			header("Location: LoginSHAHAD.php?error=Incorect Email or password");
	        exit();
		}
	}
	
}else{
	header("Location: LoginSHAHAD.php");
	exit();
}