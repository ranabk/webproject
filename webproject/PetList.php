<!DOCTYPE html>
<?php
	include_once("Config.php");
	$msg='';
	
	if(isset($_GET['delete'])){
		$sql = mysqli_query($conn, "DELETE FROM `pets` WHERE `ID` ='$_GET[delete]'");
			
		if(isset($sql)){
			$msg = '<div class="alert alert-success" role="alert"> Successfully deleted</div>';
		}
	}
	
?>
<html>
<head>
    <meta charset="utf-8">
    <title>Pet List</title>
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
            width: 100%;
            height: 50vh;
            background-size: 18%;
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
            position: relative;
            border-style: solid;
            border-radius: 25px;
            border-width: 2px;
            padding: 35px;
            border-color:rgb(163, 162, 162);
            justify-content: space-between;
            box-shadow: 5px 5px rgb(218, 216, 216);
        }

        .prev {
            text-align:right;
            width: 50%;
            position: relative;
            border-style: solid;
            border-radius: 25px;
            border-width: 2px;
            padding: 60px;
            border-color:rgb(163, 162, 162);
            justify-content: space-between;
            box-shadow: 5px 5px rgb(218, 216, 216);
        }
       
       
        .newappt ul li , .newappt2 ul li{
            list-style: none;
            display: inline-block;
            margin: 0 7px;
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

        #req ul li {
            list-style: none;
            display: inline-block;
            margin: 0 7px;
        }

        #req ul li .info3{
            text-align: left;
            position:absolute;
            top: 2px;
            left: 40px;
        }
         #req ul li .info4{
            text-align: left;
            position:absolute;
            top: 2px;
            left: 40px;
        }
        .prev ul li {
            list-style: none;
            display: inline-block;
            margin: 0 7px;
        }
        .prev ul li .info5{
            text-align: left;
            position:absolute;
            top: 2px;
            left: 40px;
        }
        .status {
            text-align:center;
            width: 20%;
            margin-left: 80%;
            position: relative;
            border-style: solid;
            border-radius: 25px;
            border-width: 2px;
            padding: 2px;
         
        }
       .prev ul li  .class-notes {
        position: absolute;
        top: 120px;
        left: 40px;
         text-align: left;
     }

      .container {
            width: 50%;
            position: relative;
            border-style: solid;
            border-radius: 25px;
            border-width: 2px;
            padding: 20px;
            border-color:rgb(163, 162, 162);
            justify-content: space-between;
            box-shadow: 5px 5px rgb(218, 216, 216);
            text-align:right;
            width: 50%;
            margin-left: 80px;
            margin-top: 20px;
            }

        .container ul li{
            list-style: none;
            display: inline;
            margin: 0 7px;
                }
        .container ul li .petlist{
            text-align: left;
            position: absolute;
            top: 2px;
            left: 40px;
                }

                .img{
                    border-radius: 50%;
                }

                label{
                    padding: px;
                    margin-right: 250px;
                    color:#009688;
                   
                }


       footer {
          text-align: center;
          background-color: #f1f1f1;
          color: white;
/*          border-top-left-radius: 100px;
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

        .listP{
            margin-left: 100px;
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
    <div class="buttompage">
    <h1 id="ListPets" class ="listP" style="color:#009688  ; "> <em>List Of Pets:</em>
     <a style="position: absolute; left: 350px; top: 210px; " href="AddPet.php"><img src="pics-leen/add2.png" width="40" height="40"></a></h1>
	 
   
		<?php
		    echo $msg;
			$query ="SELECT * FROM `pets` ORDER BY `ID`";
		    $sql = mysqli_query($conn , $query);
			$num = 1;
			while($pet = mysqli_fetch_assoc($sql)){
				echo 
				'<div class="container">
					<ul>
						<li><p class = "petlist">
						 <img src="'.$pet['avatar'].'" class = "img" width="80" height="60" alt="Pet"></li>
						<li><label><strong>'.$pet['name'].'</strong></label></li>

                        <li><a href="PetInfo.php?pet_id='.$pet['ID'].'"><img src="pics-leen/view4.png" width="30" height="30" alt="edit" ></a></li>  
                        <li><a href="PetInfo.php?pet_id='.$pet['ID'].'"><img src="pics-leen/edit.png" width="30" height="30" alt="edit" ></a></li>                  
                        <li><a href="PetList.php?delete='.$pet['ID'].'"><img src="pics-leen/delete.jpeg" width="30" height="30" alt="delete" ></a></li>           
					</ul>

            </div>';
							
			$num++;
			}
		?>

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