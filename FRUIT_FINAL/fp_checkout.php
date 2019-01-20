

<?php

session_start();
include('db.php');
$status="";



$product = $_SESSION["shopping_cart"];



?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="fruit.css">
<link rel="stylesheet" href="cartstyle.css">
<link rel="stylesheet" href="formstyle.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


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





<div class="topnav">
  <a href="index.html">Home</a>
  <a href="aboutus.html">About Us</a>
  <a href="fp_shop.php">Shop</a>
    <a href="faq.html">FAQ</a>
	    <a href="contactus.html">Contact Us</a>	
						<div class="search-container">
    <form action="testingofsearch.php" method="post">
    <select name="searchtype" style="visibility: hidden" >
      <option value="name">Name
    </select>
    <input name="searchterm" type="text">
    <button type="submit" name="submit" value="Search"><i class="fa fa-search"></i></button>
	
	
 
</div>	
		
</div>






<div class="content">
<body>


hello hellohello hellohello hellohello hellohello<br>
hello hellohello hellohello hellohello hellohello<br>
hello hellohello hellohello hellohello hellohello<br>hello hellohello hellohello hellohello hellohello<br>hello hellohello hellohello hellohello hellohello<br>hello hellohello hellohello hellohello hellohello<br>hello hellohello hellohello hellohello hellohello<br>hello hellohello hellohello hellohello hellohello<br>hello hellohello hellohello hellohello hellohello<br>hello hellohello hellohello hellohello hellohello<br>hello hellohello hellohello hellohello hellohello<br>


<center><h2>Check Out</h2>   </center>


<div class="cart">
<?php
if(isset($_SESSION["shopping_cart"])){
    $total_price = 0;
?>	
<table class="table" align="right">
<tbody>
<tr>
<td></td>
<td>ITEM NAME</td>
<td>QUANTITY</td>
<td>UNIT PRICE</td>
<td>ITEMS TOTAL</td>
</tr>	
<?php		

				
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

			

</tbody>




</table>





	  

<a href="fp_shop.php"><strong>Back</strong></a> <br /><br />
<a href="fp_confirm.php"><strong>Forward</strong></a> <br /><br />
		


<div style="clear:both;"></div>





  
</div>
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








	
	