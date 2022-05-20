<!DOCTYPE html>
<!-- saved from url=(0050)file:///C:/Users/Shaha/Desktop/PetCare/signup.html -->
<html>
<head>
  <!-- <meta http-equiv="Content-Type" content="text/html; charset=windows-1252"> -->
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->

  <!--font-->
        <link rel="preconnect" href="https://fonts.googleapis.com"> 
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

  <style>
   body {font-family: 'Poppins' , sans-serif; color: #009688; padding: 0px;}


   .imgcontainer {
     text-align: center;
     margin: 24px 0 12px 0;
     position: relative;
   }

   img.avatar {
     width: 17%;
     border-radius: 50%;
   }

   input[type=email], input[type=password], input[type=tel], input[type=text] {
     width: 100%;
     padding: 15px;
     margin: 5px 0 22px 0;
     display: inline-block;
     border: 1px solid #009688;
     background: #f1f1f1;
   }

   input[type=email]:focus, input[type=password]:focus, input[type=tel]:focus, input[type=text]:focus {
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

   

   button:hover {
     opacity:0.6;
   }


  .cancelbtn {
     float: left;
     width: 10%;
     
     padding: 14px 20px;
     background-color: #f44336;
   }

   /*.cancelbtn span {
    text-decoration: none;
        color: #fff ;
     float: left;
     text-align: center;
     width: 10%;
     margin: 5px 2px ;
     border-radius: 22px;
     padding: 5px 0px;
     background-color: #f44336;
   }*/

   .signupbtn {
     float: right;
     width: 36%;
     background-color: #009688;
   }

   /*.signupbtn span {
    text-decoration: none;
    color: #fff ;
    float: right;
    text-align: center;
     width: 10%;
     margin: 5px 2px ;
     border-radius: 22px;
     padding: 10px 20px;
     background-color: #7BC4C4;

   }*/

   .container {
     padding: 67px;
     margin: 36px;
   }

   .container h1{ color: #0F4C81 ; }
   .container p { color: #7BC4C4 ; }

   a { text-decoration: none; }

   span:hover { color: #f44336; text-decoration: underline;}

     /*footer style*/

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

  <title> Edit Profile</title>
<!-- check action attr -->
  <form action="/action_page.php" method="post" style=" 
      margin: 67px;       
      border-style: solid;
      border-radius: 25px;
      border-width: 2px;
      border-color:rgb(163, 162, 162);
      box-shadow: 5px 5px rgb(218, 216, 216);">

    <div class="container">
      <h1>Edit Profile</h1>
      <hr>

      <div class="imgcontainer">
        <img src="pics-shahad/avatar.png" alt="Avatar" class="avatar">
        <br>
        <!--       <form action="/action_page.php">  -->
        <!--<form action="/action_page.php"> -->
          <input type="file" id="fileToUpload" name="fileToUpload">
         <!--  <input type="submit"> -->
        <!--</form>-->
      </div>

      <label for="email"><b>Email</b></label>
      <input type="email" placeholder="Enter Email" name="email" value= "<?php echo $Email; ?>" required="">

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" value= "<?php echo $pass; ?>" required="">

      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="psw-repeat" value= "" required="">

      <label for="phoneNum"><b>Phone number </b></label>
      <input type="tel" id="phone" name="phone" placeholder="Enter Phone number" value= "<?php echo $Phone; ?>" required="">

      <label for="fname"><b>First name</b></label>
      <input type="text" placeholder="Enter your First name" name="fname" value= "<?php echo $FirstName; ?>" required>

      <label for="lname"><b>Last name</b></label>
      <input type="text" placeholder="Enter your Last name" name="lname" value= "<?php echo $LastName; ?>" required>

      <h4>Gender:</h4>
      <input type="radio" id="Male" name="Gender" value= "<?php echo $Gender; ?>">
      <label for="Male">Male</label><br>
      <input type="radio" id="Female" name="Gender" value= "<?php echo $Gender; ?>">
      <label for="Female">Female </label><br>


     

      <br> 

      <div class="clearfix">
        <button type="button" class="cancelbtn" onclick="window.location.href ='main2SHAHAD.html';">Cancel</button>
        <button type="submit" class="signupbtn">Save Changes</button> 

        <!-- 
        <button type="submit" class="signupbtn" onclick="window.location.href ='LoginSHAHAD.html';">Sign Up</button>  -->

        <!-- <a class="signupbtn" href="LoginSHAHAD.html"> <span class="signup">  Sign up </span> </a> 
        <br> <br>
        <a class="cancelbtn" href="main2SHAHAD.html"> <span class="cancelbtn">  Cancel </span> </a>  -->

      </div>
    </div>
  </form>

  <!-- foter -->
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
  $_id = $_GET['id'];
  $sql= "SELECT * FROM PETOWNER  WHERE id=$id";
  $res=mysqli_query($conn, $sql);

  if($res==true)
  (
    $count = mysqli_num_rows($res);
    if($count==1)
    $row= mysqli_fetch_assoc($res);
    $Email = $row['Email'];
    $pass = $row['password'];
    $Phone = $row['Phone'];
    $FirstName = $row['FirstName'];
    $LastName = $row['LastName'];
    $Gender = $row['Gender'];
    $Picture = $row["Picture"];
  )
?>




<?php 
  if(isset($_POST['Submit']))
  (
    $id = $_POST['id'];
    $Email = $_POST['Email'];
    $pass = $_POST['password'];
    $Phone = $_POST['Phone'];
    $FirstName = $_POST['FirstName'];
    $LastName = $_POST['LastName'];
    $Gender = $_POST['Gender'];
    $Picture = $_FILES['fileToUpload']['name']; ////////////

    $sql = " UPDATE PETOWNER SET
    Email = '$Email', 
    password = '$pass', 
    Phone='$Phone', 
    FirstName = '$FirstName', 
    LastName='$LastName', 
    Gender='$Gender', 
    Picture='$Picture'

    WHERE id='$id'
    ";

    $res = mysqli_query($conn, $sql);
  )





</body></html>