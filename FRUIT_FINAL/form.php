<!DOCTYPE html>
<html lang="en">
<head>
<title>Index</title>
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

	<center><h2>Enquiries</h2>
You can fill up the form below and we promise that we will get back to you within 3 working days!</center>


<form id="form1" method='post' action='form.php' align='center'>

<p id="head"></p>
<label for="name">*Name:</label>
<input type="text" name="name" id="name" required><br><br>

<p id="p1"></p>
<label for="email">*E-mail:</label>
<input type="text" name="email" id="email" required><br><br>



<label for="experience">*Message:</label>
<textarea name="message" id="message" rows="4" cols="40" required >
</textarea><br><br>


<input type="submit" value="Submit Enquiry">




</form>

<?php
  // create short variable names
  $name=$_POST['name'];
  $email=$_POST['email'];
    $message=$_POST['message'];


  if (!$name || !$email || !$message) {
     echo "You have not entered all the required details.<br />"
          ."Please go back and try again.";
     exit;
  }

  if (!get_magic_quotes_gpc()) {
    $name = addslashes($name);
    $email = addslashes($email);
	    $message = addslashes($message);

  }

  @ $db = new mysqli('localhost', 'f36ee', 'f36ee', 'f36ee');

  if (mysqli_connect_errno()) {
     echo "Error: Could not connect to database.  Please try again later.";
     exit;
  }

  



 $query = "INSERT INTO `enquiry`(`name`, `email`, `message`)  VALUES ('".$_POST["name"]."','".$_POST['email']."','".$_POST['message']."')";

      $result = mysqli_query($db,$query);

	 
  if ($result) {
      echo  "Hurray! we have received your form!";
  } else {
  	  echo "An error has occurred.  The item was not added.";
  }

  $db->close();
?>



  
</div>






</div>


</body>

 <script type = "text/javascript"  src = "validator.js" ></script>
 
<div class="footer">
  
 <i><center> © Copyright fruitastic pop 2018<br>
 All rights reserved </center></i>
 
</div>




</html>