<?php
        session_start();
         // create constants to store non repeating values
                    define('SITEURL' , 'http://localhost/webproject/');
                    $conn = mysqli_connect('localhost', 'root' , '') ;//or die (mysqli_error()); // database connection
                    $db_select = mysqli_select_db($conn , 'PetWeb'); //or die (mysqli_error()); // selecting database 
        ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale= 1.0">
    <title>About Us</title>
     <!--font-->
        <link rel="preconnect" href="https://fonts.googleapis.com"> 
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
       
        <link rel="stylesheet" type="text/css" href="AboutUsStyleRana.css">
        <style>
             body{
           font-family: 'Poppins' , sans-serif;
           overflow: scroll;
       }
    
        .headerbar{
          width: 100% ;
          padding:0 5%;
          display: flex;
          align-items: center;
          justify-content: space-between;
        }

        .logo{
          width: 100px;
          
        }
        .headerbar ul{
            list-style: none;
            display: flex;

        }
        .headerbar ul li{
            margin: 0 15px;
            border-bottom: 2px solid #009688 ;
            position: relative;

        }
        .headerbar ul li a{
          text-decoration:  none;
          color: grey;  
          position:relative;
          transition: all 0.3s;
        }

        .headerbar ul li a:hover{
          color: black;
          transition: 0.2s;
          padding: 0px;
        } 
        .dropdown{
            display: none;
        }
        .headerbar ul li:hover .dropdown {
          display: block;
          position: absolute;
          left: 0;
          top: 100%;
          background-color:#009688;
          font-size: 11px;

        }
        .dropdown ul li a{
            color: white;
        }
        .dropdown ul{
          display: block; /* Display the dropdown */
         
        }


        footer {
          text-align: center;
          font-family: serif;
          padding: 3px;
          background-color: #D9CBB9;
          color: white;
        }

        h2{
            margin: 17px 20px;
            color: #0F4C81 ;
        }

        .footerContent p{
            color: #0F4C81 ;
        }

        .sm{ width: 170px; }

        .container{
            <?php
            $sql  = "SELECT * FROM AboutUs";
                     //execute the query
                    $res = mysqli_query($conn, $sql);
                    if($res == TRUE){
                     //count rows to check whether we have data already stored in db
                     $count = mysqli_num_rows($res);
                     while($rows=mysqli_fetch_assoc($res)){
                        $backgroundpic = $rows['backgroundpic'];

            ?>
            background-image: linear-gradient(rgba(0, 0, 0, 0.75) , rgba(0, 0, 0, 0.75)), url(pics-rana/<?php echo $backgroundpic ?>);
             <?php
                }
            }
            ?>
        }


        </style>
    </head>
    <body>
        <div class="headerbar">
            <img src= "pics-rana/Templogo.jpeg" class="logo">
            <ul>
                <li> <a href="PetList.php">  My Pets </a></li>
                <li> <a href="#"> Appointments</a> 
                    <div class="dropdown">
                        <ul > 
                            <li><a href="manager'sApptpageRana.php">My Appointments </a> </li>
                            <li><a href="RequestedApptHind.php"> Requested Appointments</a> </li>
                        </ul>
                    </div>
                    
                </li>
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
          <div class="container">
            <div class="row">
                <div class="heading-section">
                    <h1 style=" color: #009688;">About Us<a class= "editAbouUs" href="editAboutUsreema.html"><img src="pic-reema/editIcon.png"  width="35" height="35" alt="edit"></a></h1></h1>
                    <?php
                    // query to get aboutus
                    $sql  = "SELECT * FROM AboutUs";
                     //execute the query
                    $res = mysqli_query($conn, $sql);
                    if($res == TRUE){
                     //count rows to check whether we have data already stored in db
                     $count = mysqli_num_rows($res);
                     while($rows=mysqli_fetch_assoc($res)){
                        $AboutUs = $rows['AboutUs'];

            ?>
                    <p><?php echo $AboutUs ?></p>
                    <?php
                }
            }
            ?>
                    </div>
                    <br>
                    <h1 style=" color: #009688;">What We Do</h1>
                        <div class="content-section">
                       
                            <?php 
                                $sql= "SELECT * FROM WhatWeDo";
                                 //execute the query
                                 $res = mysqli_query($conn, $sql);
                                 if($res == TRUE){
                                 //count rows to check whether we have data already stored in db
                                 $count = mysqli_num_rows($res); // function to get all rows in db

                                 //check number of rows 
                                 if($count >0){
                        
                                 //we have data in db
                                 while($rows=mysqli_fetch_assoc($res)){
                                 //using while loop to get all data from db
                                 //get indivisual data
                                 $pic = $rows['pic'];
                                 $service = $rows['Service'];
                                 $discription = $rows['Description'];
                            ?>
                             <div class="card">
                            <img style="height: 300px; width: 300px; border-radius: 150px" src="pics-rana/<?php echo $pic; ?>"> 
                            <h4 style=" color: #009688" class="servicename"><?php echo $service ;?></h4>
                            <p class="disccription"><?php echo $discription ;?></p>
  </div>


            <?php
        }

?>
              </div>            
            </div>  
      
            
            </div>   
               <?php }
               } ?>

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

