<?php 
session_start();

if (isset($_SESSION['Email'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin - Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <h1>Welcome Admin :   <?php echo $_SESSION['Email']; ?></h1>
     <a href="logout.php">Logout</a>
</body>
</html>

<?php 
}else{
     header("Location: admin_index.php");
     exit();
}
 ?>