<?php 
session_start(); 
include "db_conn.php";
if (isset($_POST['Email']) && isset($_POST['FirstName'])
    && isset($_POST['LastName']) && isset($_POST['Phone']) && isset($_POST['Gender']) && isset($_POST['re_password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}
	$Email = validate($_POST['Email']);
	$pass = validate($_POST['password']);
	$re_pass = validate($_POST['re_password']);
	$FirstName = validate($_POST['FirstName']);
	$LastName = validate($_POST['LastName']);
	$Phone = validate($_POST['Phone']);
	$Gender = validate($_POST['Gender']);
	$Picture = $_FILES['fileToUpload']['name'];

	$user_data = 'Email='. $Email. '&FirstName='. $FirstName. '&LastName='. $LastName. '&Phone='. $Phone. '&Gender='. $Gender. '&Picture='. $Picture;


	if (empty($Email)) {
		header("Location: SignUpSHAHAD.php?error=Email is required&$user_data");
	    exit();
	}else if(empty($pass)){
        header("Location: SignUpSHAHAD.php?error=Password is required&$user_data");
	    exit();
	}
	else if(empty($re_pass)){
        header("Location: SignUpSHAHAD.php?error=Re Password is required&$user_data");
	    exit();
	}

	else if(empty($FirstName)){
        header("Location: SignUpSHAHAD.php?error=FirstName is required&$user_data");
	    exit();
	}

	else if(empty($LastName)){
        header("Location: SignUpSHAHAD.php?error=LastName is required&$user_data");
	    exit();
	}

	else if(empty($Phone)){
        header("Location: SignUpSHAHAD.php?error=Phone is required&$user_data");
	    exit();
	}

	else if(empty($Gender)){
        header("Location: SignUpSHAHAD.php?error=Gender is required&$user_data");
	    exit();
	}

	else if($pass !== $re_pass){
        header("Location: SignUpSHAHAD.php?error=The confirmation password  does not match&$user_data");
	    exit();
	}

	else{

		// hashing the password
        $pass = md5($pass);

	    $sql = "SELECT * FROM petowner WHERE Email='$Email' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: SignUpSHAHAD.php?error=The Email is already taken try another&$user_data");
	        exit();
		}else {
		    
		 // image starts

			$target_dir = "uploads/";
			$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]); //
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
		
		//image ends
		
           $sql2 = "INSERT INTO petowner(Email, password, FirstName, LastName, Phone, Gender, Picture) VALUES('$Email', '$pass', '$FirstName', '$LastName', '$Phone', '$Gender', '$Picture')";
           $result2 = mysqli_query($conn, $sql2);
           
           if ($result2) {
               
           	 header("Location: LoginSHAHAD.php?success=Your account has been created successfully");
	         exit();
           }else {
	           	header("Location: SignUpSHAHAD.php?error=unknown error occurred&$user_data");
		        exit();
           }
		}
	}
	
}else{
	header("Location: SignUpSHAHAD.php");
	exit();
}