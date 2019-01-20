<?php

session_start();
include('db.php');
$status="";




$product = $_SESSION["shopping_cart"];


//Use foreach loop to loop through all the item in the array
//$productCode = key of the item in the array
//$productValue = value of the item in the array
foreach($product as $productCode => $productValue){
	$query = "insert into orders (item_id, qty, amount) values ('".$productCode."', '".$productValue["quantity"]."', '".$productValue["price"]."')";
	$result = mysqli_query($con,$query);
}

?>





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

<center><h2>Check Out</h2>   </center>

<?php
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
?>
<div class="cart_div">
<a href="fp_cart.php" >
<img src="cart-icon.png" />Items(<?php echo $cart_count; ?>)</a>
</div>
<?php
}
?>



<div class="cart">
<?php
if(isset($_SESSION["shopping_cart"])){
    $total_price = 0;
?>	
<table class="table" align="center">
<tbody>
<tr>
<td></td>
<td>ITEM NAME</td>
<td>QUANTITY</td>
<td>UNIT PRICE</td>
<td>ITEMS TOTAL</td>
</tr>	
<?php		

					// $total = 0;
					if(!empty($_SESSION["shopping_cart"]))
					{
						
foreach ($_SESSION["shopping_cart"] as $product){
?>




<tr>
<td><img src='<?php echo $product["image"]; ?>' width="50" height="40" /></td>
<td><?php echo $product["name"]; ?> <br />


</td>
<td>


<?php echo $product["quantity"]; ?> 




</td>
<td><?php echo "$".$product["price"]; ?> </td>
<td><?php echo "$".$product["price"]*$product["quantity"]; ?></td>

		
</tr>

	
						
<?php
$total_price += ($product["price"]*$product["quantity"]);
}
?>


<tr>
<td colspan="5" align="right">
<strong>TOTAL: <?php echo "$".$total_price; ?></strong>


 
</form>

	<?php
						}
						?>

</td>
</tr>

						<?php
					}
					

	
					if ($result) {
						echo " Hurray! Your order has been sent to us!<br/>";
			
					} else {
						echo "An error has occurred.  The form details were not added.";
					}
					?>

</tbody>




</table>





	  

<a href="fp_index.php"><strong>Homepage</strong></a> <br /><br />
		

</div>

<div style="clear:both;"></div>

<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>
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