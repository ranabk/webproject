<?php
// create constants to store non repeating values
define('SITEURL' , 'http://localhost/webproject/');
$conn = mysqli_connect('localhost', 'root' , '') or die (mysqli_error()); // database connection
$db_select = mysqli_select_db($conn , 'PetWeb') or die (mysqli_error()); // selecting database
// get id of appt to be deleted
 $id= $_GET['ID'];
//create sql query to delete appt
$sql = "DELETE FROM Appointments WHERE ID= $id";
//execute the query
$res = mysqli_query($conn, $sql);
//check whether the query is executed or not
if($res == TRUE){
    //query executed
    //create session variable to display message
    $_SESSION['delete'] = "Appointment Deleted Succesfully";
    //redirect to petOwnerAppt page
    header('location:'.SITEURL.'petOwnerApptRana.php');
}
else{
    //query failed
    //redirect to petOwnerAppt page
    $_SESSION['delete'] = "Failed to delete Appointment";
    //redirect to petOwnerAppt page
    header('location:'.SITEURL.'petOwnerApptRana.php');
  
//redirect to petOwnerAppt page with syccess or failure message
    }
?>
