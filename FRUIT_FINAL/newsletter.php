<!DOCTYPE html>
<html lang="en">
<head>
<title>Newsletter</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="fruit.css">
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


<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="fruit6.jpg" style="width:100%">

  
    <div class="text" background="#32ABDA"><h2>Featured Pops of the Month<br></h2>
	Our popsicles are made of gluten free, no sugar added and free of artificial flavours! <br>
	We have a range of fruit popsicles from tropical fruits to classical favourites, you will be left wanting more!

			  
	</div>
	<button class="btn"><a href="shop.html">Shop Now!</button></a>
	


  
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="fruit11.jpg" style="width:100%">
  
   <div class="text" background="#32ABDA"><h2>All-time best seller<br></h2>
	Our all-time best seller, Kiki Kiwi is made up of juicy golden kiwi imported from New Zealand. <br>
	Especially for the health conscious, Kiki Kiwi is the most popular kid on the block!

			  
	</div>
	<button class="btn">More about Kiki Kiwi!</button>
  
  
  
  
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="fruit12.jpg" style="width:100%">
  
     <div class="text" background="#32ABDA"><h2>Our Story<br></h2>
As a homegrown small business in Singapore, things are never easy. <br>
Read more about our story how we strive through adversities to bring you fruitastic pop it is today! <br>

			  
	</div>
	<button class="btn">Our Story</button>
  
  
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

  
 <script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 5000); // Change image every 2 seconds
}
</script>



</div>




</div>
  
  
  
  
  
</div>

<div class="icon">




<div class="simple-subscription-form">
  <form align="center">
    <h3>Join our mailing list for the latest updates!</h3>
    <p>Receive updates and latest news direct from our team. Simply enter your email below :</p>
	
     <div class="input-group">
	   Name: <input class="input-group-field" type="text" name="name" required> <br><br>
      Email: <input class="input-group-field" type="email" name="email" required> <br>
      <button class="button">Sign up now</button>
	  
	  
	  
	  
  </form>
  
  
</div>







<?php
  // create short variable names
  $name=$_POST['name'];
  $email=$_POST['email'];


  if (!$name || !$email) {
     echo "You have not entered all the required details.<br />"
          ."Please go back and try again.";
     exit;
  }

  if (!get_magic_quotes_gpc()) {
    $name = addslashes($name);
    $email = addslashes($email);

  }

  @ $db = new mysqli('localhost', 'root', '', 'demo');

  if (mysqli_connect_errno()) {
     echo "Error: Could not connect to database.  Please try again later.";
     exit;
  }

  



 $query = "INSERT INTO `newsletter`(`name`, `email`)  VALUES ('".$_POST["name"]."','".$_POST['email']."')";

      $result = mysqli_query($db,$query);

	  

  if ($result) {
      echo  "Hurray! we have received your email!";
  } else {
  	  echo "An error has occurred.  The item was not added.";
  }

  $db->close();
?>
</div>


</body>


<div class="footer">
  <p>Footer</p>
</div>




</html>