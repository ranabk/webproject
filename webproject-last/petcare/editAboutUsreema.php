<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Edit About Us</title>
<link rel="preconnect" href="https://fonts.googleapis.com"> 
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
	<style>
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
        min-width: 200%; /* Set width of the dropdown */
        background: black;
        display: none;
        position: absolute;
        z-index: 999;
        left: 0px;
        padding: 0px; 
        text-decoration: none;
        margin-right: 10px;
       
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
		h1{
    font-size: 3rem;
    color: #009688;
    margin-left: 0.5em;
}
.textarea{
background-color: #a9dad441;
color: #171f1e;
border: none;
font-size: 1.25em;
box-shadow: 0 3px 10px rgba(0, 0, 0, 0.2);
outline: none;
	
}

.container{
    margin: 1em;
    position: relative;
    margin-left: 1 em;

    
}


.myborder1{
    position: absolute;
    border-width: 0.55em;
    border-radius: 2em;
    border-color: #458B8442;
    border-style: solid;
   width: 70em;
   padding: 50px 20px;
   
   
}
.content-section .card img{
    width: 20%;
    height: auto;
}
		.changes{
    color: #009688;
    margin-left: 10em;
    border-radius: 30px;
            font-weight: bold;
            background: #458B8442;
            padding: 10px 10px;
            text-decoration: none;
            margin-bottom: 20px;
}

button.changes {
  cursor: pointer;
  border:none;
}

button.changes:hover{
  background-color:#009688;
  color: #fff;
}

  .dropdown ul li a{
            color: white;
        }
        .dropdown ul{
          display: block; /* Display the dropdown */
  }

  .popup{
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%) scale(0);
    transition: 150ms ease-in-out;
    border: 3px solid rgba(0, 0, 0, 0.2);
    border-radius: 10px;
    z-index: 10;
    background-color: #fff;
    width: 500px;
    max-width: 80%;
  }

  .popup.active{
    transform: translate(-50%, -50%) scale(1);
  }

  .popup img{
    display: block;
    margin: 0 auto;
    max-width: 70%;
  }

  .popup-header{
    text-align: center;
    font-weight: bolder;
    font-size: 1.25rem;
  }

  .popup-description{
    text-align: center;
  }

  .popup button{
    display: block;
    width:100px;
    height: 60px;
    margin: 20px auto;
  }

#overlay{
  position: fixed;
  opacity: 0;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  transition: 150ms ease-in-out;
  background-color: rgba(0, 0, 0, 0.5);
  pointer-events: none;
}

#overlay.active{
  opacity: 1;
  pointer-events: all;

}


</style>
</head>
<body>
	<div class="headerbar">
        <img src= "pic-reema/Templogo.jpeg" class="logo">
        <ul>
          <li> <a href="AvailableApptRana.php"> Appointments  </a> </li>
           <li><a href ="Services.php"> Services </a></li>
          <li> <a href="Manager'sAboutUsPageRana.php"> About Us </a> </li>
          <li><a href="#contact us"> Contact Us </a></li>
         


          <li>    <a href="#" ><img src = "pic-reema/menuIcon.png" width = "30" height = "10" alt = "menu"> </a>
            <ul class="dropdown">
                <li><a href="main2SHAHAD.html">Logout</a></li>
            </ul>
        </ul>
    </li>
</ul>
      </div>
   <!--     <div class="headerbar">
        <img src= "pics-rana/Templogo.jpeg" class="logo">
        <ul>
          <li> <a href="#"> Appointments</a> 
                    <div class="dropdown">
                        <ul > 
                            <li><a href="AvailableApptRana.html">My Appointments </a> </li>
                            <li><a href="RequestedApptHind.html"> Request a new Appointment</a> </li>
                        </ul>
                    </div>
          <li><a href="Services.html"> Services </a></li>
          <li> <a href="Manager'sAboutUsPageRana.html"> About Us </a> </li>
          <li><a href="#contact us"> Contact Us </a></li>
                <li><a href="#" ><img src = "pics-rana/menu.jpeg" width = "30" height = "10" alt = "menu"></a>
                    <div class="dropdown">
                        <ul >
                            <li><a href="main2SHAHAD.html">Logout</a></li>
                         </ul>
                    </div>
                </li>
      </div> -->
<h1> Edit About Us </h1>
<hr> </hr>
<br><br>
<div class="container">
<div class="myborder1">

<form class="textarea">
  <label>About Us:</label><br>
  <textarea id="textarea1" rows="10" cols="50">
  	Our clinic was founded in January 2021 in the Kingdom of Saudi Arabia, Since it was established, our staff have been providing unique veterinary medical services and compassionate animal care in Riyadh city.<br> Here at the Clinic, we treat every client as though they were family and each pet as if they were our own. <br> We try our best to provide complete high quality veterinary care with emphasis on exceptional client service and patient care. We belive that you and your pet should feel as comfortable as possible, that's why we offer a free in-home reservation service and manage appointmnets even before your first service begins.</textarea><br>
        <div class="content-section">
<?php
$_id = $_GET['id'];
$sql= "SELECT * FROM AboutUs  WHERE id=$id";
$res=mysqli_query($conn, $sql);

if($res==true)
(
$count = mysqli_num_rows($res);
if($count==1)
  $row= mysqli_fetch_assoc($res);
$textarea1 = $row['textarea1'];

?>

<?php 
if(isset($_POST['Submit']))
(
$id = $_POST['id'];
$textarea1 = $_POST['textarea1'];


$sql = " UPDATE AboutUs SET
AboutUs = '$textarea1', 
WHERE id='$id'
";

$res = mysqli_query($conn, $sql);


)?>
        </form>
<form class="whatwedo">
     <div class="card">
      <h4 style=" color: #009688" id="service1">Pet Grooming</h4>
                            <img src="pics-rana/petgrooming.jpeg">
                             <textarea id="textarea" rows="10" cols="50">Does your little love need a haircut or nail trim? We offer a full-service pet grooming that puts your pet's health first. Book a grooming visit with us now </textarea>
                        </div>
                        <div class="card">
                        <h4 style=" color: #009688" id="service2">Pet Bathing</h4>
                            <img src="pics-rana/petbathing.jpeg" >
                             <textarea id="textarea" rows="10" cols="50"> Did Spot get dirty after a trip to the park? Our pet bath will make your furry friend shiny and clean again. Call us today to schedule a professional bath</textarea>
                        </div>
                        <div class="card">
                          <h4 style=" color: #009688" id="service3">Pet Vacinating</h4>
                            <img src="pics-rana/petvacinating.jpg" >
                             <textarea id="textarea" rows="10" cols="50">Do you want to protect your pet against different disseases? We offer a whole vacination schedule to make sure your pet ia as healthy as ever. </textarea>
                        </div>
 <?php if (isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
      <?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>
  <label for="changeImage">Add service, Image and discription:</label><br>
  <textarea id="newservice" rows="2" cols="50"></textarea>
  <input name="addImage" type="file"> 
  <textarea id="description" rows="10" cols="50"></textarea>
  <?php
$_id = $_GET['id'];
$sql= "SELECT * FROM WhatWeDo  WHERE id=$id";
$res=mysqli_query($conn, $sql);

if($res==true)
(
$count = mysqli_num_rows($res);
if($count==1)
  $row= mysqli_fetch_assoc($res);
$textarea1 = $row['textarea1'];
$service1 = $row['service1'];
$service2 = $row['service2'];
$service3 = $row['service3'];
)


?>

<?php 
if(isset($_POST['Submit']))
(
$id = $_POST['id'];
$textarea1 = $_POST['textarea1'];
$service1 = $_POST['service1'];
$service2 = $_POST['service2'];
$service3 = $_POST['service3'];


$sql = " UPDATE WhatWeDo SET
pic = '$addImage', 
Service = '$newservice', 
Description='$description', 
FirstName = '$FirstName', 
WHERE id='$id'
";

$res = mysqli_query($conn, $sql);


)?>
   </form>


  <br><br>
  <div>
    <button class="changes" onclick="openPopUp()">Save Changes</button>
    <button class="changes" onclick="reset()">Reset</button>
 </span> </a>
	</div>
</div>
</div>

<div class="popup" id="popup">
  <div class="popup-body">
    <div class="tick"><img src="pic-reema/tick.jpg" alt="tick"></div>
    <div class="popup-header">Changes Saved!</div>
    <p class="popup-description">The changes have been saved and "About Us" is updated.</p>
    <br>
    <button class="changes" onclick="closePopUp()">Close</button>
  </div>
</div>

<div id="overlay"></div>

<script src="editAboutUsReema.js"></script>
</body>
</html>
