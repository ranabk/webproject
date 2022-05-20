<!DOCTYPE html>
<?php 
	include_once("Config.php");
	$msg='';

	?>
<html>
<head>
    <meta charset="utf-8">
    <title>Services</title>
     <!--font-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <style >
       
        body{
           
            font-family: 'Poppins' , sans-serif;
            overflow: scroll;
        }
        .buttompage{
            background-image: url(pics-rana/petdoc.jpeg) ;
            background-position: right;
            background-position-y: bottom;
            background-repeat: no-repeat;
            background-size: 18%;
            width: 100%;
            height: 50vh;

           
        }
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
        }
            .headerbar ul li a:hover{
          color: black;
          transition: 0.2s;
          padding: 0px;
     }
     ul li ul.dropdown {
        position: relative;
        min-width: 120%; /* Set width of the dropdown */
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
        .menu-rana{
          width: 90% ;
          margin:auto;
          padding: auto;
          padding: 25px ;
          display: flex;
          align-items: center;
          justify-content: space-between;
       }
       
        .menu-rana ul li{
          list-style: none;
          align-items: center;
          display: inline-block;
          margin: 0 15px;
          position:relative;
        }
        .menu-rana ul li a{
          text-decoration:  none;
          color: grey;  
          position:relative;
        }
        .menu-rana li a:hover{
           color: black;
           transition: 0.2s;
           border-bottom: 2px solid #009688;
        }

        .newappt, #req  {
            text-align:right;
            width: 50%;
            margin-left: 100px;
            position: relative;
            border-style: solid;
            border-radius: 25px;
            border-width: 2px;
            padding: 35px;
            border-color:rgb(163, 162, 162);
            justify-content: space-between;
            box-shadow: 5px 5px rgb(218, 216, 216);
        }

        .sec{
           
        }


       
       
        .newappt ul li {
            list-style: none;
            display: inline-block;
            margin: 0 7px;
            padding-left: 60;
        }
        .newappt ul li .info{
            text-align: left;
            position:absolute;
            top: 15px;
            left: 40px;
        }
         .newappt ul li .info2{
            text-align: left;
            position:absolute;
            top: 182px;
            left: 40px;
        }

        .kitt{
            position: absolute;
            border-radius: 50%;
            width: 30%;

        }

        .first .kitt{
            margin-left: 170%;
            margin-top: 5px;
           
        }

        .bath{
            position: absolute;
            border-radius: 50%;
            width: 35%;
        }

        .sec .bath{
            margin-left: 195%;
            margin-top: 2%;
        }

        .newappt .sec{
            margin-left: 100%;
        }

        .sertitle{
            margin-left: 80px;
        }



       footer {
          text-align: center;
          background-color: #f1f1f1;
          color: white;
/*        border-top-left-radius: 100px;
          border-top-right-radius: 100px;*/
        }

        footer h2{
            margin: 17px 20px;
            color: #0F4C81 ;
        }

       .footerContent p{
            color: #0F4C81 ;
           margin: 0 ;
           padding: 0 ;
           font-family: 'Poppins' , sans-serif;
        }

        .sm{ width: 170px; }

        #seappt{
            margin-top: ;
        }
     
       
      </style>
</head>

<body>

    <div class="headerbar">
        <img src= "pics-leen/Templogo.jpeg" class="logo">
        <ul>
          <li> <a href="managershomepage.php"> HOME  </a> </li>
          <li> <a href="Manager'sAboutUsPageRana.php"> ABOUT US </a> </li>
          <li><a href="#contact us"> CONTACT US </a></li>
          <li>    <a href="#" ><img src = "pics-leen/more.jpeg" width = "30" height = "10" alt = "menu"> </a>
            <ul class="dropdown">
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </ul>
    </li>
</ul>
      </div>
      
   

    <hr style= " position: relative; margin-top: 0px; top: -30px; bottom: -10;">
    <br>
    <div class="buttompage">
    <h1 class ="sertitle"id="Services" style="color:#009688 ; "> <em>Services</em>
        <a style="position: absolute; left: 250px; top: 240px;" href="addService.php"><img src="pics-leen/add2.png" width="40" height="40"></a></h1>
   <?php echo $msg;?>
    
        
		<?php 
			$query="SELECT * From `services`";
			$sql = mysqli_query($conn , $query);
			$num = 1;
			while($serv = mysqli_fetch_assoc($sql)){
				echo '
				<br>
				<div class="newappt" >
				<ul>
					<div class = "first">
					<li ><p class="info"style="text-align: left;">  
					<img src="'.$serv['image'].'" class="kitt">
					<strong><span style="color: #009688;">'.$serv['name'].'</span> </strong>
					<br> '.$serv['description'].' 
					   <br>
							<strong><span style="color: #009688;">Price:</span> </strong>  '.$serv['price'].' </p></li>				   
				</ul> 
				</div>

				</div>';
				$num++;
				}
		?>
    <br><br><br><br>

   
</div>

 <footer>
	
        <div class="footerContent">
       
			<h2 id="Contact"> Find us at </h2>
			<p> Saudi Arabia, Riyadh </p>
			<p> Anas bin malik </p>
			<p> Building 7  </p>
			<p> 2nd floor  </p>
			<br>
			<p> Call us +966 502909802  </p>
			<p id= "contact us"> To contact us via email <a href="mailto:vet@gmail.com"> click the link </a> and it will direct you. </p>
			<br>
        <img src="pics-shahad/sm.png" class="sm">

        </div>
  </footer>  
   
   

</body>
</html>