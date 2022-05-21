<?php 
session_start();

if (isset($_SESSION['Email'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>User - Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <h1>Welcome User :   <?php echo $_SESSION['FirstName']; ?></h1>
     <a href="logout.php">Logout</a>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>