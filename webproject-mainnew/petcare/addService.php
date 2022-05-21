<!DOCTYPE html>
<?php
 include_once("Config.php");
 
 
 $msg='';
 $name ='';
 $desc='';
 $price = '';
 
 
 if(isset($_POST['Addbtn'])){
  
    $name =$_POST['Sname'];
    $desc = $_POST['desc'];
    $price = $_POST['price'];
    

  if(empty($name)){
   $msg= '<div  class="w3-panel w3-pale-red w3-round-xxlarge w3-border">Enter service name, Please!</div>';
  }elseif(empty($desc)){
   $msg= '<div  class="w3-panel w3-pale-red w3-round-xxlarge w3-border" > Enter service description, Please!</div>';
  }elseif(empty($price)){
   $msg= '<div  class="w3-panel w3-pale-red w3-round-xxlarge w3-border"> Enter service price, Please!</div>';
  }else{
	    $image =$_FILES['Simg'];
		$image_name = $image['name'];
		$image_tmp = $image['tmp_name'];
		$image_size = $image['size'];
		$image_error = $image['error'];
	
        	if($image_name != ''){
				
				$image_exe = explode('.' , $image_name);
				$image_exe = strtolower(end($image_exe));
				
				$allowed = array('png','gif','jpg','jpeg');
				
				if(in_array($image_exe , $allowed)){
					if($image_error === 0){
						if($image_size <= 30000000){
							$new_name = uniqid($name.' Service',false) . '.' . $image_exe ;
							$image_dir = 'pics-leen/Services/' . $new_name;
							$image_db = 'pics-leen/Services/'. $new_name;
							if(move_uploaded_file($image_tmp , $image_dir)){
								// Insert service into services database 
								$insert ="INSERT INTO `services` (`name` ,`description` ,`image` ,`price`) 
								VALUES ('$name' ,'$desc','$image_db'  ,'$price')";
								$inser_sql = mysqli_query($conn , $insert);
								
								if(isset($inser_sql)){
									$msg= '<div class="w3-panel w3-pale-green w3-round-xxlarge w3-border" role="alert">Service added successfully!</div>';
									echo '<meta http-equiv="refresh" content="3; \'Services copy.php\'">';
								}else{ 
									$msg = '<div  class="w3-panel w3-pale-red w3-round-xxlarge w3-border">File upload failed, please try again.</div>'; 
								}  			
						}
					}
			   }
			}else{ 
				$msg = '<div  class="w3-panel w3-pale-red w3-round-xxlarge w3-border">Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.</div>'; 
			} 
		}else{ 
			// Insert service into services database 
			$insert ="INSERT INTO `services` (`name` ,`description` ,`image` ,`price`) 
			VALUES ('$name' ,'$desc','pics-leen/no_image.png'  ,'$price')";
			$inser_sql = mysqli_query($conn , $insert);
			if(isset($inser_sql)){
				 $msg= '<div class="w3-panel w3-pale-green w3-round-xxlarge w3-border" role="alert">Service added successfully!</div>';
				echo '<meta http-equiv="refresh" content="3; \'Services copy.php\'">';
			}else{ 
				 $msg= '<div  class="w3-panel w3-pale-red w3-round-xxlarge w3-border">Error, Please try agin !</div>';
			}  
			
			}
			
		}
   }
   



?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

     <!--font-->
        <link rel="preconnect" href="https://fonts.googleapis.com"> 
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

        

  

  <style >
    
   body {font-family: 'Poppins' , sans-serif; color::#009688; padding: 0px;}

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
      }
     
          

   .imgcontainer {
     text-align: center;
     margin: 24px 0 12px 0;
     position: relative;
   }

   img.avatar {
     width: 17%;
     border-radius: 50%;
   }

   input[type=file], input[type=text] {
     width: 100%;
     padding: 15px;
     margin: 5px 0 22px 0;
     display: inline-block;
     border: 1px solid #7BC4C4;
     background: #f1f1f1;
   }

   input[type=file]:focus, input[type=text]:focus {
     background-color: #ddd;
     outline: none;
   }

   hr {
     border: 1px solid #f1f1f1;
     margin-bottom: 25px;
   }

   button {
     background-color:  #009688;
     color: white;
     padding: 14px 20px;
     margin: 8px 0;
     border: none;
     cursor: pointer;
     width: 100%;
     opacity: 0.9;
     border-radius: 22px;


   }

   /*.AddSer span  { 

    background-color: #7BC4C4;
    color: white;
    padding: 13px 600px;
    margin: 50px 0px;
    margin-top: 30px;
    border: none;
    cursor: pointer;
    width: 100%;
    border-radius: 22px;
     }*/

   button:hover {
     opacity:1;
   }



   .container {
     padding: 67px;
     margin: 36px;
   }

   .container h1{ color: #009688 ; }
   .container p { color: #7BC4C4 ; }
   .container label{ color: #009688 ; }

   a { text-decoration: none; }

   span:hover { color: #f44336; text-decoration: underline;}


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

  </style>
</head>
<body>

    <title>Add Service</title>

  <div class="headerbar">
    <img src= "pics-leen/Templogo.jpeg" class="logo">
    <ul>
      <li> <a href="managershomepage.php"> HOME  </a> </li>
      <li> <a href="Manager'sAboutUsPageRana.php"> ABOUT US </a> </li>
      <li><a href="#contact us"> CONTACT US </a></li>
      <li>    <a href="#"  ><img src = "pics-leen/more.jpeg" width = "30" height = "10" alt = "menu"> </a>
        <ul class="dropdown">
            
            <li><a href="logout.php ">Logout</a></li>
        </ul>
    </ul>
</li>
</ul>
  </div>


  <form action="" method="post" enctype="multipart/form-data" style=" 
      margin: 67px;       
      border-style: solid;
      border-radius: 25px;
      border-width: 2px;
      border-color:rgb(163, 162, 162);
      box-shadow: 5px 5px rgb(218, 216, 216);">

    <div class="container">
      <h1>Add Service</h1>
      <p>Please fill in this form to Add a Service.</p>
      <hr>

      <div >
        
      </div>
		<?php echo $msg;?>
		
		<label for="Simg"><b>Service Image</b></label>
		<input type="file" id="myFile" name="Simg">

      <label for="Sname"><b>Service name</b></label>
      <input type="text" placeholder="Enter Service's name" name="Sname" id="serviceName"required>



      <label for="disc"><b>Service description</b></label>
      <input type="text" placeholder="Add Service's description" name="desc" id="descrip"required>

       <label for="Price"><b>Price</b></label>
      <input type="text" placeholder="Add Service's price" name="price" id="price"required>
      <br><br>


    

       <!--<a class="AddSer" href="Services.html"> <span class="submit">  Add Service </span> </a>-->
      
      <div class="clearfix">
        <button type="submit" class="Addbtn"  name="Addbtn" id="addbt">Add Service</button>
      </div>
    </div>
  </form>

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

  <script src="addService.js"></script>  

</body>
</html>