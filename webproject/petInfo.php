<!DOCTYPE html>
<?php
	include_once("Config.php");
	
	$msg='';
	$avatar= '';
	$med_file= ''; 
	
	
	if(isset($_POST['cancel'])){
		echo '<meta http-equiv="refresh" content="3; \'PetList.php\'">';		

	}
?>
<html>
<head>
  <!-- <meta http-equiv="Content-Type" content="text/html; charset=windows-1252"> -->
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->

    <!--font-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

  <style>
   body {font-family: 'Poppins' , sans-serif; color:#009688; padding: 0px;}

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

   input[type=petN], input[type=password], input[type=tel], input[type=text] {
     width: 100%;
     padding: 15px;
     margin: 5px 0 22px 0;
     display: inline-block;
     border: 1px solid #7BC4C4;
     background: #f1f1f1;
   }



   input[type=petN]:focus, input[type=password]:focus, input[type=tel]:focus, input[type=text]:focus {
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
     padding: 16px 20px;
     margin: 10px 0;
     border: none;
     cursor: pointer;
     width: 25%;
     opacity: 0.9;
     border-radius: 22px;
     margin-left: 230px;


   }*/

 

   /*.AddP span  {

    background-color: #7BC4C4;
    color: white;
    padding: 13px 600px;
    margin: 50px 50px;
    margin-top: 30px;
    border: none;
    cursor: pointer;
    width: 100%;
    border-radius: 22px; } }*/


   button:hover {
     opacity:1;
  }



   .container {
     padding: 67px;
     margin: 36px;
   }

   .container h1{ color: #009688 ; }
   .container p { color: #7BC4C4 ; }
   

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

        /*#cancelbtn{
          margin-left: 25%;
          margin-bottom: 50px;
          width: 50%;
        }*/



     

 </style>
</head>

<body>
  <title> Add pets</title>

  <div class="headerbar">
    <img src= "pics-leen/Templogo.jpeg" class="logo">
    <ul>
      <li> <a href="homepage.html"> HOME  </a> </li>
      <li> <a href="AboutUsPageRana.html"> ABOUT US </a> </li>
      <li><a href="#contact us"> CONTACT US </a></li>
      <li>    <a href="#"  ><img src = "pics-leen/more.jpeg" width = "30" height = "10" alt = "menu"> </a>
        <ul class="dropdown">
            <li><a href="editProfilereema.html">Manage Profile</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </ul>
</li>
</ul>
  </div>

<!-- check action attr -->
 <!--<form action="PetList.html" method="post" style="border:10px solid #5A5B9F; margin: 67px;">-->
  <form action="" method="post" enctype="multipart/form-data" style="
      margin: 67px;      
      border-style: solid;
      border-radius: 25px;
      border-width: 2px;
      border-color:rgb(163, 162, 162);
      box-shadow: 5px 5px rgb(218, 216, 216);">

    <div class="container">
      <h1 class="title">Pet Info</h1>
      <p>Click the save button to save changes.</p>
      <hr>
	  <?php 
			echo $msg;
			$get_pet = mysqli_query($conn ,"SELECT * FROM `pets` WHERE `ID` ='$_GET[pet_id]'");
			$pet = mysqli_fetch_assoc($get_pet);
			
			$avatar=  $pet['avatar'];
			$med_file= $pet['med_history'];
				
		?>
      <div class="imgcontainer">
        <img src="<?php echo $pet['avatar']; ?>" alt="Avatar" class="avatar">
        <br>
        
        <input type="file" id="myFile" name="avatar">
        
      </div>

      <label for="fname" ><b>Pet's name</b></label>
      <input type="text" value="<?php echo $pet['name']; ?>" name="Pname" id="petName"required>

      <div>
      <label><strong>Date Of Birth</strong>
      <input name="Date" type="date" size="25" value="<?php echo $pet['birth_date']; ?>" maxlength="30" id="birthday">
    </label></div>
    <br>

      <h4>Gender:</h4>
      <input type="radio" id="gender" name="gender" value="Male" <?php if($pet['gender'] == 'Male'){echo 'checked'; }?>  >
      <label for="Male">Male</label><br>
      <input type="radio" id="gender" name="gender" value="Female"  <?php if($pet['gender'] == 'Female'){echo 'checked'; }?> >
      <label for="Female">Female </label><br>
      <br>


      <label for="Bname"><b>Bread</b></label>
      <input type="text" name="Bname" value="<?php echo $pet['bread']; ?>" id="bread" required>

      <h4>Status:</h4>
      <input type="radio" id="status" name="status" value="Spayed" <?php if($pet['status'] == 'Spayed'){echo 'checked'; }?> >
      <label for="Spayed">Spayed</label><br>
      <input type="radio" id="status" name="status" value="Neutered" <?php if($pet['status'] == 'Neutered'){echo 'checked'; }?>>
      <label for="Neutered">Neutered </label><br>
      <br>

     <label for="vacc"><b>Vaccinations</b></label>
      <input type="text" name="vacc" value="<?php echo $pet['vaccination']; ?>" id="vaccine"required>
   
         <h4>Medical History</h4>
         <input type="file" name="addF" id="medHistory">
       </label><br><br>

<br>
      <p>
    <!--<a class="AddP" href="PetList.html"> <span class="submit">  Add Pet </span> </a> -->
        <button type="submit" class="btn" id="addbtn" name="edit_pet" onclick="validateForm()">Save changes</button>
        <button type="submit" class="btn" id="cancelbtn" name="cancel" style="background-color: #f44336;">Cancel</button>
      </p>
     
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
	<?php 
	if(isset($_POST['edit_pet'])){
		
		$file_db ='';
		$isUploaded=false;
	
		$name =$_POST['Pname'];
	    $date = $_POST['Date'];
	    $gender = $_POST['gender'];
	    $bread = $_POST['Bname'];
		$status = $_POST['status'];
	    $vacc = $_POST['vacc'];
		

		$med_history =$_FILES['addF'];
		$file_name = $med_history['name'];
		$file_tmp = $med_history['tmp_name'];
		$file_error = $med_history['error'];
			
		if($file_name != ''){
				
			$file_exe = explode('.' , $file_name);
			$file_exe = strtolower(end($file_exe));
				
			if($file_error === 0){
				$new_name = uniqid($name.'_Med_history',false) . '.' . $file_exe ;
				$file_dir = 'pics-leen/Pets/' . $new_name;							
				$file_db = 'pics-leen/Pets/'. $new_name;
				if(move_uploaded_file($file_tmp , $file_dir)){
					$isUploaded=true;
				}
			}
		   }
					
		$image =$_FILES['avatar'];
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
						$new_name = uniqid($name.' Pet',false) . '.' . $image_exe ;
						$image_dir = 'pics-leen/Pets/' . $new_name;							
						$image_db = 'pics-leen/Pets/'. $new_name;
						if(move_uploaded_file($image_tmp , $image_dir)){
							if(!$isUploaded){// If no medical history file uploaded !
							
								// Update pets info in database 
								$update ="UPDATE  `pets` SET `avatar`='$image_db',`name`='$name',`birth_date`='$date',`gender`='$gender',`bread`='$bread',`status`='$status',`vaccination`='$vacc',`med_history`='$med_file' WHERE `ID`='$_GET[pet_id])'";
								
								$update_sql = mysqli_query($conn , $update);
								if(isset($update_sql)){										
									$msg= '<div class="alert alert-success" role="alert">Pet updated successfully ! </div>';
									echo '<meta http-equiv="refresh" content="3; \'PetList.php\'">';		
								}else{ 
									$statusMsg = "File upload failed, please try again."; 
								}  
							}else{
								// Update pets info in the database with medical history file
								
								$update ="UPDATE  `pets` SET `avatar`='$image_db',`name`='$name',`birth_date`='$date',`gender`='$gender',`bread`='$bread',`status`='$status',`vaccination`='$vacc',`med_history`='$file_db' WHERE `ID`='$_GET[pet_id])'";
								
								$update_sql = mysqli_query($conn , $update);
								if(isset($update_sql)){
									$msg= '<div class="alert alert-success" role="alert">Pet added successfully ! </div>';
									echo '<meta http-equiv="refresh" content="3; \'PetList.php\'">';		
								}else{ 
									$statusMsg = "File upload failed, please try again."; 
								}  
							}
							
						}
					}
			   }
			}else{ 
				$statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
			} 
		}else{ // If no image upload 
			// Update pet info in the database 
			$update ='';
			if(isUploaded){
				$update ="UPDATE  `pets` SET `avatar`='$avatar' ,`name`='$name',`birth_date`='$date',`gender`='$gender',`bread`='$bread',`status`='$status',`vaccination`='$vacc',`med_history`='$file_db' WHERE `ID`='$_GET[pet_id])'";
			}else{
				$update ="UPDATE  `pets` SET `avatar`='$avatar' ,`name`='$name',`birth_date`='$date',`gender`='$gender',`bread`='$bread',`status`='$status',`vaccination`='$vacc',`med_history`='$med_file' WHERE `ID`='$_GET[pet_id])'";
			}
			
			
			
			$update_sql = mysqli_query($conn , $update);
			
			if(isset($update_sql)){
				$msg= '<div class="alert alert-success" role="alert">Pet updated successfully ! </div>';
				echo '<meta http-equiv="refresh" content="3; \'PetList.php\'">';		
			}else{ 
				$statusMsg = "Error, please try again."; 
			}  
			
			}
			
		}
		?>
   <script src="petInfo.js"></script>


</body></html>