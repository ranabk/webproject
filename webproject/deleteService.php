<?php
session_start();
// create constants to store non repeating values
define('SITEURL' , 'http://localhost/webproject/');
define('LOCALHOST', 'localhost');
define('DB_USERNAME' , 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'PetWeb');
$conn = mysqli_connect('LOCALHOST ', 'DB_USERNAME' , 'DB_PASSWORD') or die (mysqli_error()); // database connection
$db_select = mysqli_select_db($conn , DB_NAME) or die (mysqli_error()); // selecting database
// get id of appt to be deleted
$SN = $_GET['ID'];
//create sql query to delete appt
$sql = "DELETE FROM VetAppt WHERE id=$id";
//execute the query
$res = mysqli_query($conn . $sql);
//check whether the query is executed or not
if($res == TRUE){
    //query executed
    //echo"appointment deleted";
    //create session variable to display message
    $_SESSION['delete']="Appointment deleted succesfuly";
    //redirect to petOwnerAppt page
    header('location:'.HOMEPAGE."manager'sApptpageRana.php");
}
else{
    //query failed
    echo"appointment failed to delete";
    $_SESSION['delete']="Appointment failed to delete, try again later";
    //redirect to petOwnerAppt page
    header('location:'.HOMEPAGE."manager'sApptpageRana.php");
}
//redirect to petOwnerAppt page with syccess or failure message
?>