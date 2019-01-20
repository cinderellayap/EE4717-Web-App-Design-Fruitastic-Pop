<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="fruit.css">

<style>
table {
    width:60%

}

td {
    padding: 15px;
    text-align: center;
}

th{
    padding: 15px;
    text-align: center;
}


table#t01 tr:nth-child(even) {
    background-color: #FFD4A5;
}
table#t01 tr:nth-child(odd) {
   background-color: #32ABDA;
}
</style>


</head>



<div class="banner">

<div class="img1">

<img src="icon.jpg" style="max-width:600px">
</div>

</div>



<div class="topnav">
  <a href="index.html">Home</a>
  <a href="aboutus.html">About Us</a>
  <a href="fp_shop.php">Shop</a>
    <a href="faq.html">FAQ</a>
	    <a href="contactus.html">Contact Us</a>
		
		
</div>




<body>


<div class="content">

 <h2>Registration Page</h2>
<form action="register-1.php" method=POST>
Username:<br />
<input type=text name=username><br /><br />
Password:<br />
<input type=password name=password><br /><br />
Password confirmation:<br /> 
<input type=password name=password2><br /><br />

<input type=submit name=submit value=Submit>
<input type=reset name=reset value="Reset">
</form>
  
  <?php // register.php
include "db.php";
if (isset($_POST['submit'])) {
	if (empty($_POST['username']) || empty ($_POST['password'])
		|| empty ($_POST['password2']) ) {
	echo "All records to be filled in";
	exit;}
	}
	
$username = $_POST['username'];
$password = $_POST['password'];
$password2 = $_POST['password2'];

// echo ("$username" . "<br />". "$password2" . "<br />");
if ($password != $password2) {
	echo "Sorry passwords do not match";
	exit;
	}
$password = md5($password);
// echo $password;
$query = "INSERT INTO signup (username, password) 
		VALUES ('.$username.', '.$password.')";
//	echo "<br>". $sql. "<br>";

$result = mysqli_query($con,$query);


if (!$result) 
	echo "Your query failed.";
else
	echo "Welcome ". $username . ". You are now registered";
	
?>


</div>


<div class="icon">





hello
</div>




</div>


</body>


<div class="footer">
  <p>Footer</p>
</div>




</html>