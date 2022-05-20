<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "db_conn.php";

if($_GET['key'] && $_GET['reset'])
{
  $email=$_GET['key'];
  $pass=$_GET['reset'];

  $sql = "SELECT Email,password FROM petowner WHERE Email='$email' AND md5(password)='$pass' ";

  $select = mysqli_query($conn, $sql);

  if(mysqli_num_rows($select)==1)
  {
    ?>
    
    
<!DOCTYPE html>
<html>


<head>
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->

  <!--font-->
        <link rel="preconnect" href="https://fonts.googleapis.com"> 
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">


	<title> forgot password </title>

	<style>
		body {font-family: 'Poppins' , sans-serif;   color: #0F4C81; padding: 0px; }
		form {padding: 67px}

		input[type=text] {
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			box-sizing: border-box;
		}

		button {
			background-color: #009688;
			color: white;
			padding: 14px 20px;
			margin: 17px 0;
			border: none;
			cursor: pointer;
			width: 100%;
			border-radius: 25px;
			opacity: 0.8;

		}

		button:hover {
			opacity: 0.8;
		}

		.container {
			padding: 50px;
		}

		form h2{color: #0F4C81; }
		form h4{color: #009688; }



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


<!-- ------------------------------HTML------------------------------------- -->

<body>

	

     <!-- check action attr -->
	<form action="submit_new.php" method="post" style=" 
      margin: 67px;       
      border-style: solid;
      border-radius: 25px;
      border-width: 2px;
      border-color:rgb(163, 162, 162);
      box-shadow: 5px 5px rgb(218, 216, 216);">

		<h2>Enter Your Password </h2>
	

		<div class="container">
		      <input type="hidden" name="email" value="<?php echo $email;?>">
			<label for="method"><b>Password</b></label>
			<input type="text" placeholder="Enter your New Password" name="password" required>

			<button type="submit" name="submit_password">Update Password</button>

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
</html>
  <?php
}
}
?>