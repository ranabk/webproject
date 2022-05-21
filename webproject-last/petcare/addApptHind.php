<!DOCTYPE html>
<html> 

<head> 
<meta charset="utf-8">
<title> Add An Appointment </title>
<!--font-->
<link rel="preconnect" href="https://fonts.googleapis.com"> 
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">


<link rel="stylesheet" type="text/css" href="requestApptHind.css">
<link rel="stylesheet" type="text/css" href="headerHind.css">

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

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
      <li> <a href="#"> Appointments</a> 
                <div class="dropdown">
                    <ul > 
                        <li><a href="AvailableApptRana.php">My Appointments </a> </li>
                        <li><a href="RequestedApptHind.php"> Request a new Appointment</a> </li>
                    </ul>
                </div>
      <li><a href="Services.php"> Services </a></li>
      <li> <a href="Manager'sAboutUsPageRana.php"> About Us </a> </li>
      <li><a href="#contact us"> Contact Us </a></li>
            <li><a href="#" ><img src = "pics-rana/menu.jpeg" width = "30" height = "10" alt = "menu"></a>
                <div class="dropdown">
                    <ul >
                        <li><a href="logout.php">Logout</a></li>
                     </ul>
                </div>
            </li>
  </div>
<h1>Add A New Appointment</h1>
<hr>
<div class="container"> <!--big container containing all elements-->
    
    <br> <br>
<div id="myborder1"> 
<br>
<p><span style=" color: red; margin-left: 22px;  ">* required field</span></p>

<form method= "POST" action =" addApptHind.php">
    <div class="class-service" style="margin-bottom:1em;" > 
        <label style="font-size:24px; margin-left:1em; ">Enter Service
             <textarea id="textarea-choice" name="choose-service" rows="1" cols="25" ></textarea>
            </label> <span style=" color: red; margin-left: 5px; ">* <?php echo $serviceError;?></span>

     </div>


    <div class="class-date" > 
        <label style="font-size: 24px; margin-left:0.4em;">Choose a date
            <input name="chosen-date" type="date" value="date" id="date-choice"> 
            </label>  <span style=" color: red; margin-left: 5px; ">* <?php echo $dateError;?></span>

    </div>


    <div class="class-time" >
        <label>Choose a time
            <input name="chosen-time" type="time" value="time"  id="time-choice">
            </label> <span style=" color: red; margin-left: 5px; ">* <?php echo $timeError;?></span>
    </div>
    
    <div>
    <label style="font-size:24px; margin-left:1em; ">Enter price
             <textarea id="textarea-choice" name="choose-price" rows="1" cols="25" ></textarea>
            </label> 

      </div>

    <div class="class-notes" >
        <label>Extra notes</label>
        <br> <textarea id="textarea-choice" name="notes" rows="4" cols="30" ></textarea>
    </div>
    <input class="class-submitbtn" name="submit" id ="addbtn" value="add" type='submit'> 
    <input class="class-submitbtn" id="cancelbtn" value="cancel" name="cancel" > 
      </form>

</div> <!-- border end div-->
</div> <!-- container end div-->



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
     if ($_SERVER["REQUEST_METHOD"] == "POST") {
if ( isset ($_POST['submit'])){
  if (empty($_POST["choose-service"]) ){
    $serviceError = "Service is required";}
    else {$service =$_POST["choose-service"];}
    if (empty($_POST["chosen-date"])) {
      $dateError = "Date is required";}
      else {$date =$_POST["chosen-date"];}
    
      if (empty($_POST["chosen-time"])) {
      $timeError = "Time is required";} 
      else{$time =$_POST["chosen-time"];}

      if (empty($_POST["choose-price"])) {
      $timeError = "Time is required";} 
      else{$price =$_POST["choose-price"];}
  
   $notes = isset($_POST["notes"])? $_POST["notes"]: "";

  $sql="INSERT INTO vetAppt SET Service='$service',
  serviceDate='$date', serviceTime='$time',price='$price', notes='$notes' ";
  

  //echo $sql;
  define('SITEURL','http://localhost/web-project/');
  /*define('LOCALHOST','localhost');
  define('DB_USERNAME','root');
  define('DB_PASSWORD','');
  define('DB_NAME','mypet'); */
  $conn =mysqli_connect('localhost','root','') or die(mysqli_error()); //edit info later
  $db_select =mysqli_select_db($conn,'PetWeb') or die(mysqli_error()); //edit info later
  $result =mysqli_query($conn,$sql) or die(mysqli_error()); 
   if ($result==true){
     $_SESSION['add']="Appointment added successfully!";
     header('location:'.SITEURL.'AvailableApptRana.php');
  }
  else{
    $_SESSION['add']="Appointment couldnt be added!";
    header('location:'.SITEURL.'petOwnerApptRana.php');
  }
  } }

  ?>

    
</body>
</html>