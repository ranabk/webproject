<!DOCTYPE html>
<html>

<head>
	<title> main </title>
    <link rel="stylesheet" href="mainStyleSHAHAD.css">
    <!--font-->
        <link rel="preconnect" href="https://fonts.googleapis.com"> 
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>


<body>
	<div class="banner">
		<div class="headerbar">
			<img src="pics-shahad/templogo.png" class="logo">
			<ul>
				<li> <a href="AboutUsPageRana.php">  ABOUT US  </a> </li>
				<li> <a href="#contact us">  CONTACT US  </a></li>
			</ul>
		</div>

		<div class="content">
			<h1>The kind of care your pet deserve</h1>
			<div>
				<!-- this is a js, we can't link a webpage in a button using html -->
				<button type="button" onclick="window.location.href ='LoginSHAHAD.php';"> I'm a Pet owner </button>
				<button type="button" onclick="window.location.href ='ManagerLoginSHAHAD.php';"> I'm a Manager</button> 
                <!-- this is other solution -->
                 <!-- <a href="LoginSHAHAD.html"> <span class="PetOwner">  I'm a Pet owner </span> </a>  -->
                 <!-- <a href='ManagerLoginSHAHAD.html'> <span class="Manager"> I'm a Manager </span> </a>  -->

			</div>
		</div>
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