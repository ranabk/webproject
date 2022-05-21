<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Requested Appointments </title>
        <!--font-->
        <link rel="preconnect" href="https://fonts.googleapis.com"> 
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="RequestedApptHind.css">
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
<?php session_start();
if (isset($_SESSION['delete'])){
  echo $_SESSION['delete'];
  unset($_SESSION['delete']); 
}
if (isset($_SESSION['approve'])){
  echo $_SESSION['approve'];
  unset($_SESSION['approve']);
}

?>
 <div class="headerbar">
        <img src= "pics-rana/Templogo.jpeg" class="logo">
        <ul>
          <li> <a href="#"> Appointments</a> 
                    <div class="dropdown">
                        <ul > 
                            <li><a href="petOwnerApptRana.php">My Appointments </a> </li>
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
   

  
	<h1 id="uppcomingAppointments" style="color:#009688 ; "> Requested Appointment List</h1>
    <hr >
    <br> <br>
    <table class='styled-table'>
      <tr> 
        <th>Number</th>
        <th>Pet</th>
        <th>Service</th>
        <th>Date</th>
        <th>Time</th>
        <th>Notes</th>
        <th> </th>
        <th> </th>
     </tr>
      
     <?php
     $sql= "SELECT * FROM Appointments WHERE Status='pending' ";

     define('SITEURL','https://localhost/web-project/'); /*
     define('LOCALHOST','192.168.100.66');
     define('DB_USERNAME','reemaalsaliem');
     define('DB_PASSWORD','Rreema123');
     define('DB_NAME','PetWeb');*/
     $conn =mysqli_connect('localhost','root','');
     $db_select =mysqli_select_db($conn,'PetWeb');
     $sn=1;

     $result= mysqli_query($conn,$sql);
     if($result==true){
       $count= mysqli_num_rows($result);
       if($count>0){ //if there are requested appointments
        while($rows=mysqli_fetch_assoc($result)){
          $ID= $rows['ID'];
          $petname= $rows['petName']; 
          $service= $rows['Service']; 
          $date= $rows['ApptDate']; 
          $time= $rows['ApptTime']; 
          $notes= $rows['Notes'];
          $status=$rows['Status'];
        
          ?>
         <tr> 
           <td> <?php echo $sn++ ?> </td>
           <td> <?php echo $petname  ?> <a href="<?php echo SITEURL;?>PetInfo2.php?id=<?php echo $ID; ?> "> <img src="pics-hind/info.png" width="20" height="20" alt="view pet"> </a> </td> </td> 
           <td> <?php echo $service?> </td>
           <td> <?php echo $date?> </td>
           <td> <?php echo $time?> </td>
           <td> <?php echo $notes?> </td>
           <td> <a href="<?php echo SITEURL;?>approveAppt.php?id=<?php echo $ID; ?> "> <img src="pics-hind/checkyes.png" width="30" height="30" alt="accept"> </a> </td>
           <td> <a href="<?php echo SITEURL;?>deleteAppt.php?id=<?php echo $ID; ?>" class='delete-btn'> <img src="pics-hind/delete.png" width="30" height="30" alt="delete"> </a> </td>

         </tr>

        <?php
        }
        
       }

     
     else{ ?>
      <td colspan="8"> <?php echo "there are no current requests" ;?> </td> <?php }

     }
     ?>
    </table>

    <br>
    <script src="RequestedApptHind.js"> </script>
  </div>

  
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


</body>
</html>