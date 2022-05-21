
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Appointments</title>
     <!--font-->
        <link rel="preconnect" href="https://fonts.googleapis.com"> 
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="petOwnerApptStyleRana.css">
        <script  src="http://code.jquery.com/jquery-latest.js"></script>
        <script  src="petOwnerApptRanaJS.js" defer ></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
</head>

<body>
    <?php
    session_start();
    
     ?>
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
                <li><a href="AboutUsPageRana.php">About Us</a></li>
                <li><a href="#contact us"> Contact Us </a></li>
                <li><a href="#" ><img src = "pics-rana/menu.jpeg" width = "30" height = "10" alt = "menu"></a>
                    <div class="dropdown">
                        <ul >
                            <li><a href="editProfilereema.php">Manage Profile</a></li>
                            <li><a href="main2SHAHAD.html">Logout</a></li>
                         </ul>
                    </div>
                </li>
           </ul>
          </div>
     <div class="menu-rana" >
        <ul >
            <li><a href="#uppcomingAppointments"> Upcoming Appointments</a></li>
            <li><a href="#requestedAppointments"> Requested Appointments</a></li>
            <li><a href="#previousAppointments"> Previous Appointments</a></li>
        </ul>
    </div>

    <hr style= " position: relative; margin-top: 0px; top: -30px; bottom: -10;">
    <div class="buttompage">
    <h1 id="uppcomingAppointments" style="color:#009688 ; "> <em>Upcoming Appointments</em><a style="position: absolute; left: 450px; top: 245px;" href="requestApptHind.html"><img src="pics-rana/add2.png" width="40" height="40"></a></h1>
    <div class = "newappt">
        <?php
         if(isset($_SESSION['delete'])){
         echo $_SESSION['delete'];
         unset($_SESSION['delete']);
     }
     ?>
        <table class="styled-table">
            <tr>
                <th>No.</th>
                <th>Pet Name</th>
                <th>Service</th>
                <th>Date</th>
                <th>Time</th>
                <th></th>
            </tr>
            <?php

            // create constants to store non repeating values
            define('SITEURL' , 'http://localhost/webproject/');
            $conn = mysqli_connect('localhost', 'root' , '') ;//or die (mysqli_error()); // database connection
            $db_select = mysqli_select_db($conn , 'PetWeb'); //or die (mysqli_error()); // selecting database
            // query to get all upcoming appts
            $sql= "SELECT * FROM Appointments WHERE CAST(CURRENT_TIMESTAMP AS DATE) <= ApptDate AND Status= 'Approved'";
            $res = mysqli_query($conn , $sql);
            

            if($res == TRUE){

                //count rows to check whether we have data already stored in db
                $count = mysqli_num_rows($res); // function to get all rows in db
                $SN = 1;

                //check number of rows 
                if($count>0){
                    //we have data in db
                    while($rows=mysqli_fetch_assoc($res)){
                        //using while loop to get all data from db
                        //get indivisual data
                        $id = $rows['ID'];
                        $petName = $rows['petName'];
                        $Service = $rows['Service'];
                        $date = $rows['ApptDate'];
                        $time = $rows['ApptTime'];

                        //display values in our table
                        ?>
                         <tr>
                              <td><?php echo $SN++; ?></td>
                              <td><?php echo $petName;?></td>
                              <td><?php echo $Service;?></td>
                              <td><?php echo $date;?></td>
                              <td><?php echo $time;?></td>
                              <td>
                                 <a href="editApptHind.html"><img src="pics-rana/edit.png" width="30" height="30" alt="edit"></a>
                                 <a href="<?php echo SITEURL; ?>deletePOA.php?ID=<?php echo $id; ?>"><i class="material-icons" id="cancel">cancel</i> </a>

                            </td>
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
    
    <br>

    <h1 id="requestedAppointments" style="color:#009688; "><em> Requested Appointments</em></h1>
    
    <div id="req" >
        <table class='styled-table'>
            <tr>
                <th>No.</th>
                <th>Pet Name</th>
                <th>Service</th>
                <th>Date</th>
                <th>Time</th>
                <th>Status</th>
            </tr>
            <?php
            // query to get all upcoming appts
                $sql= "SELECT * FROM Appointments WHERE  CAST(CURRENT_TIMESTAMP AS DATE) < ApptDate";
                //execute the query
                $res = mysqli_query($conn, $sql);
                $SN = 1;

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
                            $id = $rows['ID'];
                            $petName = $rows['petName'];
                            $Service = $rows['Service'];
                            $date = $rows['ApptDate'];
                            $time = $rows['ApptTime'];
                            $Status = $rows['Status'];

                            //display values in our table
                            ?>
                             <tr>
                                  <td><?php echo $SN++?></td>
                                  <td><?php echo $petName;?></td>
                                  <td><?php echo $Service;?></td>
                                  <td><?php echo $date;?></td>
                                  <td><?php echo $time;?></td>
                                  <td><?php echo $Status;?></td>
 
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
    
    <h1 id="previousAppointments" style="color:#009688;"><em>Previous Appointments</em></h1>
    <div class="prev"> 
         <table class='styled-table'>
            <tr>
                <th>No.</th>
                <th>Pet Name</th>
                <th>Service</th>
                <th>Date</th>
                <th>Time</th>
                <th>Rating</th>
            </tr>

            <?php

            // query to get all upcoming appts
                $sql= "SELECT * FROM Appointments WHERE CAST(CURRENT_TIMESTAMP AS DATE) > ApptDate ";
                //execute the query
                $res = mysqli_query($conn, $sql);
                $SN = 1;
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
                            $id = $rows['ID'];
                            $petName = $rows['petName'];
                            $Service = $rows['Service'];
                            $date = $rows['ApptDate'];
                            $time = $rows['ApptTime'];

                            //display values in our table
                            ?>
                             <tr>
                                  <td><?php echo $SN++?></td>
                                  <td><?php echo $petName;?></td>
                                  <td><?php echo $Service;?></td>
                                  <td><?php echo $date;?></td>
                                  <td><?php echo $time;?></td>
                                  <td class="review"> <div class="post">
                                       <div class="text">Thanks for rating us!</div>
                                   </div>
                                   <form action="petOwnerApptRana.php" method="POST">
                                       <div style="align-self: center; padding-left: 100px;" class="rateyo" id= "rating"
                                            data-rateyo-rating="0"
                                            data-rateyo-num-stars="5"
                                            data-rateyo-score="3 ">
                                        
</div>
                                      <span class='result'>0</span>
                                      <input type="hidden" name="rating">

                                      
                                      <div class="class-notes">
                                           <label style="color:#009688; font-size: 15px;"> <strong>Extra notes? </strong></label>
                                           <br> <textarea id="notes" name="notes" rows="2" cols="20" class="extra" ></textarea>
                                           <br>
                                           <input type="submit" name="submit" class="submit"></input>
                                      </div>
                                   </form>
                                    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $rating = $_POST["rating"];
        $note = $_POST["notes"];


    $sql = "UPDATE  Appointments SET Rating = '$rating' , Review = '$note' WHERE ID='$id' " ;

    if (mysqli_query($conn, $sql))
    {
    }
    else
    {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
}
    ?>

                                  </td>


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
<br><br><br>
</div>

            



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
        <br>
        <img src="pics-shahad/sm.png" class="sm">

        </div>
    </footer>  
    
</body>
</html>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>

<script>
    $(function () {
        $(".rateyo").rateYo().on("rateyo.change", function (e, data) {
            var rating = data.rating;
            $(this).parent().find('.score').text('score :'+ $(this).attr('data-rateyo-score'));
            $(this).parent().find('.result').text('rating :'+ rating);
            $(this).parent().find('input[name=rating]').val(rating); //add rating value to input field
        });
    });
</script>