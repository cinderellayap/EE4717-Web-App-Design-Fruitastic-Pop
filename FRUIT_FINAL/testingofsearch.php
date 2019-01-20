<?php session_start();
include('db.php');
$status="";
if (isset($_POST['code']) && $_POST['code']!=""){
$code = $_POST['code'];
$result = mysqli_query($con,"SELECT * FROM `products` WHERE `code`='$code'");
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$code = $row['code'];
$price = $row['price'];
$image = $row['image'];

$cartArray = array(
	$code=>array(
	'name'=>$name,
	'code'=>$code,
	'price'=>$price,
	'quantity'=>1,
	'image'=>$image)
);




if(empty($_SESSION["shopping_cart"])) {
	$_SESSION["shopping_cart"] = $cartArray;
	$status = "<div class='box'>Product is added to your cart!</div>";
}else{
	$array_keys = array_keys($_SESSION["shopping_cart"]);
	if(in_array($code,$array_keys)) {
		$status = "<div class='box' style='color:red;'>
		Product is already added to your cart!</div>";	
	} else {
	$_SESSION["shopping_cart"] = array_merge($_SESSION["shopping_cart"],$cartArray);
	$status = "<div class='box'>Product is added to your cart!</div>";
	}

	}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Index</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="fruit.css">
<link rel="stylesheet" href="cartstyle.css">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Nixie One' rel='stylesheet'>


<style>
@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}

/* for usual case */

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
    float: right;
    padding: 6px;
    border: none;
    margin-top: 8px;
    margin-right: 16px;
    font-size: 17px;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 0px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}



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

<center><h2>Shopping Cart</h2>   </center>




<?php

 // create short variable names
  $searchtype=$_POST['searchtype'];
  $searchterm=trim($_POST['searchterm']);

  if (!$searchtype || !$searchterm) {
     echo 'You have not entered search details.  Please go back and try again.';
     exit;
  }


  @ $db = new mysqli('localhost', 'f36ee', 'f36ee', 'f36ee');

  if (mysqli_connect_errno()) {
     echo 'Error: Could not connect to database.  Please try again later.';
     exit;
  }

  

  $query = "select * from products where ".$searchtype." like '%".$searchterm."%'";
  $result = $db->query($query);

  $num_results = $result->num_rows;

  echo "<p>Number of products found: ".$num_results."</p>";
  
while($row = mysqli_fetch_assoc($result)){
		echo "<div class='product_wrapper'>
			  <form method='post' action='fp_shop.php'>
			  <input type='hidden' name='code' value=".$row['code']." />
			  <div class='image'><img src='".$row['image']."' /></div>
			  <div class='name'>".$row['name']."</div>
		   	  <div class='price'>$".$row['price']."</div>
			  <button type='submit' class='buy'>Buy Now</button>
			  </form>
		   	  </div>";
        }

  $result->free();
  $db->close();
        
?>


<div style="clear:both;"></div>
  
</div>






</div>


</body>


<div class="footer">
  
 <i><center> © Copyright fruitastic pop 2018<br>
 All rights reserved </center></i>
 
</div>




</html>

