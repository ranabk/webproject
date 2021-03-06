<!DOCTYPE php>
<php>
<head>
  <title> Log in</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!--font-->
        <link rel="preconnect" href="https://fonts.googleapis.com"> 
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

  <style>
    body {font-family: 'Poppins' , sans-serif;   }
    form {border: 100px solid #f1f1f1;  } 

    

    .container {
      padding: 50px;
      color: #009688;
      border-bottom-right-radius : 25px;
       border-bottom-left-radius : 25px;


    }


    input[type=email], input[type=password] {
      width: 100%;
      padding: 13px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #7BC4C4;
      box-sizing: border-box;
    }

    input[type=email]:focus, input[type=password]:focus {
      background-color: #ddd;
      outline: none; 
    }

     .login {
      background-color: #009688;
      color: white;
      padding: 13px 20px;
      margin: 7px 0;
      border: none;
      cursor: pointer;
      width: 100%;
      border-radius: 22px;
      opacity: 0.8;

    }

    button:hover {
      opacity: 0.8;

    }


    .cancelbtn {
      width: auto;
      padding: 10px 17px;
      background-color: #f44336;
      color: white;
      border: none;
      cursor: pointer;
      border-radius: 22px;
    }

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
<!-- check action attr , method post for the senstive data (submitted form data is not shown in the URL) -->
  <form action="login.php" method="post" style=" 
      margin: 67px;       
      border-style: solid;
      border-radius: 25px;
      border-width: 2px;
      border-color:rgb(163, 162, 162);
      box-shadow: 5px 5px rgb(218, 216, 216);">

    <div class="container">
     <h2>Login </h2>
     <br>
     <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>
     <label for="email"><b>Email</b></label>
      <input type="email" placeholder="Enter Email" name="Email" required="">
     <br>
     <label for="psw"><b>Password</b></label>
     <input type="password" placeholder="Enter Password" name="password" required>
     <br>
     <br>

     <button type="submit" class="login">Login</button>
      <!--       <a class="login" href="homepage.php"> <span class="submit">  login </span> </a>  -->
     <br>
     <br>

      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>

    </div>

  <div class="container"  >
    <button type="button" class="cancelbtn" onclick="window.location.href ='main2SHAHAD.php';">Cancel</button>
   <!--  <a class="cancelbtn" href="main2SHAHAD.php"> <span class="cancelbtn">  Cancel </span> </a>  -->
    <p> Don't have an account? <a href="SignUpSHAHAD.php"><span> Sign up</span> </a> </p>
    <p> forgot password? <a href="forgetPassSHAHAD.php"><span>reset </span> </a> </p>
    
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

</body>
</php>
