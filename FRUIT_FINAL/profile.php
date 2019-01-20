<?php


include('session.php');

if(!isset($_SESSION['login_user'])){
header("location: index.php"); // Redirecting To Home Page
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Index</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="fruit.css">
<link rel="stylesheet" href="couponstyle.css">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Nixie One' rel='stylesheet'>


<style>



</style>

</head>



<div class="navbar">


  <a href="index.php"><i class="fa fa-user-circle"></i></a>
  <a href="fp_cart.php"><i class="fa fa-shopping-cart"></i> </a>  
  
  
  	<div class="search-container">
    <form action="testingofsearch.php" method="post">
    <select name="searchtype" style="visibility: hidden" >
      <option value="name">Name
    </select>
    <input name="searchterm" type="text">
    <button type="submit" name="submit" value="Search"><i class="fa fa-search"></i></button>
	</form>
	
 
</div>

</div>



<div class="banner">

<div class="img1">

<img src="banner4.jpg" style="max-width:1000px">





</div>


</div>






<div class="topnav">
  <a href="index.html">Home</a>
  <a href="aboutus.html">About Us</a>
  <a href="fp_shop.php">Shop</a>
    <a href="faq.html">FAQ</a>
	    <a href="contactus.html">Contact Us</a>
			    <a href="profile.php">Members Exclusive</a>
		
		
  </div>
  





<body>



<div class="content">

 <div id="profile">
  <b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
  <b id="logout"><a href="logout.php">Log Out</a></b>
 </div>
 
 
 
 <div class="coupon">
  
  <img src="dragon.jpg" alt="Avatar" width="100%">
  <div class="container" style="background-color:white">
    <h1><b>20% OFF YOUR PURCHASE</b></h1> 
    <p>Get 20% off your next purchase of fruitastic pop mix flavour! Members exclusive only.</p>
  </div>
  <div class="container">
    <p>Use Promo Code: <span class="promo">FRUIT7483</span></p>
    <p class="expire">Expires: Jan 03, 2019</p>
  </div>
</div>

  
</div>






</div>


</body>


<div class="footer">
  
 <i><center> © Copyright fruitastic pop 2018<br>
 All rights reserved </center></i>
 
</div>




</html>
