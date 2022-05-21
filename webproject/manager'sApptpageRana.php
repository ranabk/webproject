
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>My Appointments</title>
     <!--font-->
        <link rel="preconnect" href="https://fonts.googleapis.com"> 
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="AvailableApptStyleRana.css">
        <script  src="http://code.jquery.com/jquery-latest.js"></script>
        <script  src="AvailableApptRanaJS.js" defer ></script>

</head>

<body>
     <?php
    session_start();
     ?>
    <div class="headerbar">
        <img src= "pics-rana/Templogo.jpeg" class="logo">
        <ul>
          <li> <a href="#"> Appointments</a> 
                    <div class="dropdown">
                        <ul > 
                            <li><a href="manager'sApptpageRana.php">My Appointments </a> </li>
                            <li><a href="RequestedApptHind.php"> Requested Appointments</a> </li>
                        </ul>
                    </div>
          <li><a href="Services.php"> Services </a></li>
          <li> <a href="Manager'sAboutUsPageRana.php"> About Us </a> </li>
          <li><a href="#contact us"> Contact Us </a></li>
                <li><a href="#" ><img src = "pics-rana/menu.jpeg" width = "30" height = "10" alt = "menu"></a>
                    <div class="dropdown">
                        <ul >
                            <li><a href="main2SHAHAD.html">Logout</a></li>
                         </ul>
                    </div>
                </li>
      </div>
    
     <div class="menu-rana" >
        <ul >
            <li><a href="#myAppointments"> My Appointments</a></li>
            <li><a href="#upcomingAppointments"> Upcoming Appointments</a></li>
            <li><a href="#previousAppointments"> Previous Appointments</a></li>
        </ul>
    </div>

    <hr style= " position: relative; margin-top: 0px; top: -30px; bottom: -10;">
    <div class="buttompage">
    <h1 id="myAppointments" style="color:#009688 ; "> <em>My Appointments</em>
     <a style="position: absolute; left: 350px; top: 245px;" href="addApptHind.html"><img src="pics-rana/add2.png" width="40" height="40"></a></h1>
    <div class="MyAppointments">
   <?php
         if(isset($_SESSION['delete'])){
         echo $_SESSION['delete'];
         unset($_SESSION['delete']);
     }
     ?>
    <table class="styled-table">
            <tr>
                <th>S.N.</th>
                <th>Service</th>
                <th>Date</th>
                <th>Time</th>
                <th>Notes<th>
                <th></th>
            </tr>
            <?php

// create constants to store non repeating values
define('SITEURL' , 'http://localhost/webproject/');
$conn = mysqli_connect('localhost', 'root' , '') ;//or die (mysqli_error()); // database connection
$db_select = mysqli_select_db($conn , 'PetWeb'); //or die (mysqli_error()); // selecting database 
 // query to get all upcoming appts
 $sql= "SELECT * FROM Appointments WHERE CAST(CURRENT_TIMESTAMP AS DATE) <= ApptDate";
 //execute the query
 $res = mysqli_query($conn, $sql);
 
 //check whether the query is executed
 if($res == TRUE){
    $SN= 1;
     //count rows to check whether we have data already stored in db
     $count = mysqli_num_rows($res); // function to get all rows in db
      //check number of rows 
     if($count>0){
         
         //we have data in db
         while($rows=mysqli_fetch_assoc($res)){
             //using while loop to get all data from db
             //get indivisual data
             $id = $rows['ID'];
             $Service = $rows['Service'];
             $date = $rows['ApptDate'];
             $time = $rows['ApptTime'];
             $notes = $rows['Notes'];


             //display values in our table
             ?>
              <tr>
                   <td><?php echo $SN++?></td>
                   <td><?php echo $Service;?></td>
                   <td><?php echo $date;?></td>
                   <td><?php echo $time;?></td>
                   <td><?php echo $notes;?></td>
                   <td>
                      <a href="editApptHind.html"><img src="pics-rana/edit.png" width="30" height="30" alt="edit"></a>
                      <a href="<?php echo SITEURL; ?>deleteVA.php?ID=<?php echo $id; ?>"><i class="material-icons" id="cancel">cancel</i> </a>

                 </td>
             </tr>
             <?php
        }
        
       }

     
     else{ ?>
      <td colspan="8"> <?php echo "There are no current appointments" ;?> </td> <?php }

     }
     ?>
</table>
</div>
    <br>

    <h1 id="upcomingAppointments" style="color:#009688; "><em> Upcoming Appointments</em></h1>
    <div class="upcomingAppointments">
    <table class="styled-table">
    <tr>
                <th>S.N</th>
                <th>Pet Name</th>
                <th>Service</th>
                <th>Date</th>
                <th>Time</th>
                <th></th>
            </tr>
    <?php
            // query to get all upcoming appts
                $sql= "SELECT * FROM Appointments WHERE CAST(CURRENT_TIMESTAMP AS DATE) <= ApptDate AND Status= 'Approved'";
                //execute the query
                $res = mysqli_query($conn, $sql);
                $sn = 1;
                //check whether the query is executed
                if($res == TRUE){
                    //count rows to check whether we have data already stored in db
                    $count = mysqli_num_rows($res); // function to get all rows in db

                    //check number of rows 
                    if($count>0){
                        
                        //we have data in db
                        while($rows=mysqli_fetch_assoc($res)){
                            //using while loop to get all data from db
                            //get indivisual data
                            $SN = $rows['ID'];
                            $petName = $rows['petName'];
                            $Service = $rows['Service'];
                            $date = $rows['ApptDate'];
                            $time = $rows['ApptTime'];
                            

                            //display values in our table
                            ?>
                            <tr>
                                  <td><?php echo $SN++?></td>
                                  <td><?php echo $petName;?><a href="<?php echo SITEURL;?>PetInfo2.php?id=<?php echo $ID; ?> "> <img src="pics-hind/info.png" width="20" height="20" alt="view pet"> </a> </td> </td> 
                                  <td><?php echo $Service;?></td>
                                  <td><?php echo $date;?></td>
                                  <td><?php echo $time;?></td>
                                  <td>
                                  
                                  <a href="mailto:petOwner@gmail.com" class="ContactPetOwner">Contact Pet Owner</a>
                                  </td>
                                 <?php
                                  }
?>
                            </tr>
                           <?php
        }
        
       

     
     else{ ?>
      <td colspan="8"> <?php echo "there are no current appointments" ;?> </td> <?php }

     }

     ?>
            </table>
    </div>
    
    <h1 id="previousAppointments" style="color:#009688;"><em>Previous Appointments</em></h1>
    <div class="previousAppointments">
    <div class="prev"> 
    <table class='styled-table'>
            <tr>
                <th>No.</th>
                <th>Pet Name</th>
                <th>Service</th>
                <th>Date</th>
                <th>Time</th>
                <th>Rating</th>
                <th>Review</th>
            </tr>
            <?php
            // query to get all upcoming appts
                $sql= "SELECT * FROM Appointments WHERE CAST(CURRENT_TIMESTAMP AS DATE) > ApptDate";
                //execute the query
                $res = mysqli_query($conn, $sql);

                //check whether the query is executed
                if($res == TRUE){
                    //count rows to check whether we have data already stored in db
                    $count = mysqli_num_rows($res); // function to get all rows in db

                    //check number of rows 
                    if($count>0){
                        $sn = 1;
                        //we have data in db
                        while($rows=mysqli_fetch_assoc($res)){
                            //using while loop to get all data from db
                            //get indivisual data
                            $SN = $rows['ID'];
                            $petName = $rows['petName'];
                            $Service = $rows['Service'];
                            $date = $rows['ApptDate'];
                            $time = $rows['ApptTime'];
                            $rating = $rows['Rating'];
                            $review = $rows['Review'];

                            //display values in our table
                            ?>
                             <tr>
                                  <td><?php echo $SN++?></td>
                                  <td><?php echo $petName;?><a href="<?php echo SITEURL;?>PetInfo2.php?id=<?php echo $ID; ?> "> <img src="pics-hind/info.png" width="20" height="20" alt="view pet"> </a> </td> </td> 
                                  <td><?php echo $Service;?></td>
                                  <td><?php echo $date;?></td>
                                  <td><?php echo $time;?></td>
                                  <td><?php echo $rating ; ?></td>
                                  <td><?php echo $review;?></td>
                                      
                            </tr>
                           <?php
        }
        
       }

     
     else{ ?>
      <td colspan="8"> <?php echo "there are no current appointments" ;?> </td> <?php }

     }
     ?>
           
            
        </table>
</div>
<br><br><br><br>

    <footer>

        <div class="footerContent"> 
        
        <h2 id="Contact"> Find us at </h2>
        <p> Saudi Arabia, Riyadh </p>
        <p> Anas bin malik </p>
        <p> Building 7  </p>
        <p> 2nd floor  </p>
        <br>
        <p> Call us +966 502909802</p>
        <p id= "contact us"> To contact us via email <a href="mailto:vet@gmail.com"> click the link </a> and it will direct you. </p> 
s
        <br>
        <img src="pics-shahad/sm.png" class="sm">

        <!-- <ul class="social">
            <li> <a href="#"> <i class="fa fa-facebook"></i> </a> </li>
            <li> <a href="#"> <i class="fa fa-twitter"></i>   </a> </li>
            <li> <a href="#"> <i class="fa fa-linkedin-square"></i>    </a>  </li>
            <li> <a href="#"> <i class="fa fa-instagram"></i> </a>  </li>
        </ul> -->



        </div>
    </footer>  
</body>
</html>
