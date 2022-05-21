<!DOCTYPE html>
<html> 

<head> 
<meta charset="utf-8">
<title>Request An Appointment </title>
<!--font-->
<link rel="preconnect" href="https://fonts.googleapis.com"> 
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
<script src="jquery-3.6.0.min.js"></script>


<link rel="stylesheet" type="text/css" href="requestApptHind.css">


<style >
  /*header style*/
    .headerbar{
              width: 90%  ;
              margin: auto;
              padding: 36px 0;
              display: flex;
              align-items: center;
              justify-content: space-between;
            }
            .logo{
              width: 100px;
              
            }
            .headerbar ul li{
              list-style: none;
              display: inline-block;
              margin: 0 15px;
              position: relative;
              
            }
            .headerbar ul li a{
              text-decoration:  none;
              color: grey;  
              position:relative;
              
    
            }
            .headerbar ul li::after {
              content: '';
              height: 3px;
              width: 100% ;
              background: #009688;
              position: absolute;
              left: 0;
              bottom: -10px;
              transition: 0.5s;
              text-decoration: none;
            }
                .headerbar ul li a:hover{
              color: black;
              transition: 0.2s;
              padding: 0px;
         } 
         ul li ul.dropdown {
            position: relative;
            min-width: 120%; 
            text-decoration: none;
            display: none;
            position: absolute;
            z-index: 999;
            left: 0;
            padding: 0px; 
        }
        ul li:hover ul.dropdown {
            display: block; /* Display the dropdown */
            left: 0px;
             padding: 0px ;
         }
    
              body{font-family: 'Poppins' , sans-serif;}
    
              .headbar ul li.dropdown{
                display: block;
              }
  
        .dropdown{
          text-decoration: none;
        }/*header style*/
       
   
  /*footer style*/
         footer {
            text-align: center;
            font-family: serif;
            padding: 3px;
            background-color: #D9CBB9;
            color: white;
            margin-top: 80em;
            
          }
          
  
  
          #Contact{
              margin: 17px 20px;
              color: #0F4C81 ;
          }
  
          .footerContent p{
              color: #0F4C81 ;
              
          }
  
          .sm{ width: 170px; } /*footer style*/
  
       </style>      
</head>

<body> 
<?php session_start(); ?>
  <div class="headerbar">
    <img src= "pics-rana/Templogo.jpeg" class="logo">
    <ul>
        <li> <a href="PetList.php">  My Pets </a></li>
        <li> <a href="#"> Appointments</a> 
            <div class="dropdown">
                <ul > 
                    <li><a href="petOwnerApptRana.php">My Appointments </a> </li>
                    <li><a href="RequestApptHind.php"> Request a new Appointment</a> </li>
                </ul>
            </div>
            
        </li>
        <li><a href="#contact us"> Contact Us </a></li>
        <li><a href="#" ><img src = "pics-rana/menu.jpeg" width = "30" height = "10" alt = "menu"></a>
            <div class="dropdown">
                <ul >
                    <li><a href="editProfilereema.php">Manage Profile</a></li>
                    <li><a href="logout.php">Logout</a></li>
                 </ul>
            </div>
        </li>
   </ul>
  </div>
<h1>Request A New Appointment</h1>
<hr>
<div class="container"> <!--big container containing all elements-->
    
    <br> <br>
<div id="myborder1"> 

<form method= "POST" action =" requestApptHind.php">
   

     
   
    <div class="class-pet">
        <label style="margin-left:1em; font-size:22px;">Choose from the available pets </label>
        <table class='styled-table'>
      <tr> 
        <th>Pets</th>
     </tr>
        
          <?php
           $sql3= "SELECT * FROM Pets "; 
          $conn3 =mysqli_connect('localhost','root','') ;
          $db_select =mysqli_select_db($conn3,'PetWeb');
          $result3 =mysqli_query($conn3,$sql3);
          if ($result3==true){
            $count3= mysqli_num_rows($result3);
            if($count3>0){ //if there are pets
             while($rows3=mysqli_fetch_assoc($result3)){
               $pet= $rows3['Name']; 
               ?>
              <tr> 
              <td> <?php echo $pet ?> </td>
             </tr>
               <?php
         } } 
         else{ ?>
          <td> <?php echo "there are no current pets" ;?> </td> <?php }
         }
        
         ?>
         </table>
               
             <textarea id="choose-pet" class='serv' name="choose-pet" rows="1" cols="20" ></textarea> <br> <br>
           
     </div>

<!-- ------------------------------------------------------------------>
    <div class="class-service">
        <label style="margin-left:1em; font-size:22px;">Choose one of the available services </label>
        <table class='styled-table'>
      <tr> 
        <th>Number</th>
        <th>Services</th>
        <th>Date</th>
        <th>Time</th>
        <th>Price</th>
     </tr>
        
          <?php
           $sql2= "SELECT * FROM vetAppt "; 
          $conn2 =mysqli_connect('localhost','root','') ;
          $db_select =mysqli_select_db($conn2,'PetWeb');
          $result2 =mysqli_query($conn2,$sql2);
          $sn=1;
          if ($result2==true){
            $count2= mysqli_num_rows($result2);
            if($count2>0){ //if there are services
             while($rows2=mysqli_fetch_assoc($result2)){
               $service= $rows2['Service'];
               $date= $rows2['serviceDate'];
               $time= $rows2['serviceTime'];
               $price= $rows2['price'];
               ?>
              <tr> 
              <td> <?php echo $sn++ ?> </td>
              <td> <?php echo $service ?> </td>
              <td> <?php echo $date ?> </td>
              <td> <?php echo $time ?> </td>
              <td> <?php echo $price ?> </td>
             </tr>
               <?php
         } } 
         else{ ?>
          <td> <?php echo "there are no current services" ;?> </td> <?php }
         }
        
         ?>
         </table>
               
         <span style="font-size:20px; margin-left:10px;"> Service:</span> <textarea id="choose-service" class='serv' name="choose-service" rows="1" cols="20" > </textarea> <br> <br>
         <span style="font-size:20px; margin-left:10px;">Date: </span><input type="date" id="choose-date" class='serv' name="choose-date"  >  <br> <br>
         <span style="font-size:20px; margin-left:10px;">Time: </span> <input type="time" id="choose-time" class='serv' name="choose-time"  > <br> <br>
           
     </div>




    <div class="class-notes">
        <label>Extra notes</label>
        <br> <textarea id="textarea-choice" name="notes" rows="4" cols="30" ></textarea>
    </div>
    <input class="class-submitbtn" value="Request" id="addbtn" name='submit' type='submit' >
    <input class="class-submitbtn" id="cancelbtn" value="cancel" name='cancel'>
</div> <!-- border end div-->
</div> <!-- container end div-->
<br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br><br> <br> <br> 
<br> <br> 
<footer>

        <div class="footerContent"> 
        
        <h2 id="Contact"> Find us at </h2>
        <p> Saudi Arabia, Riyadh </p>
        <p> Anas bin malik </p>
        <p> Building 7  </p>
        <p> 2nd floor  </p>
        <p> +96655434333  </p>
        <p id= "contact us"> To contact us via email <a href="mailto:vet@gmail.com"> click the link </a> and it will direct you. </p> 

        <br>
        <img src="pics-shahad/sm.png" class="sm">
        </div>
    </footer>  





    <?php 
    
$petError=$serviceError=$dateError= $timeError='';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if ( isset ($_POST['submit'])){
if ($_POST["choose-pet"]=='none'){
$petError = "Pet is required";}
else {$pet =$_POST["choose-pet"];}

if (empty($_POST["choose-service"])) {
  $serviceError = "Service is required";}
  else {$service =$_POST["choose-service"];}

if (empty($_POST["chosen-date"])) {
  $dateError = "Date is required";}
  else {$date =$_POST["chosen-date"];}

  if (empty($_POST["chosen-time"])) {
  $timeError = "Time is required";} 
  else{$time =$_POST["chosen-time"];}

$notes = isset($_POST["notes"])? $_POST["notes"]: "";

$sql="INSERT INTO Appointments SET petName='$pet', Service='$service',
ApptDate='$date',ApptTime='$time', Notes='$notes',Rating='', Review='' ";
//echo $sql;

define('SITEURL','http://localhost/web-project/');
  /*define('LOCALHOST','localhost');
  define('DB_USERNAME','root');
  define('DB_PASSWORD','');
  define('DB_NAME','mypet'); */
  $conn =mysqli_connect('localhost','root','') or die(mysqli_error()); //edit info later
  $db_select =mysqli_select_db($conn,'PetWeb') or die(mysqli_error());//edit info later
$result =mysqli_query($conn,$sql) or die(mysqli_error()); 
 if ($result==true){
   $_SESSION['request']="Appointment requested successfully!"; //request or add only?
   header('location:'.SITEURL.'petOwnerApptRana.php');
}
else{
  $_SESSION['request']="Appointment request failed!";
  header('location:'.SITEURL.'petOwnerApptRana.php');
}
} }
?>
<script src="requestApptHind.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>
</html>
