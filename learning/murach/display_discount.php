<?php
//get the data
  //either PHP5.6 doesnt support filter_input or
  //vultr hosting is set up wrong
  //this is being edited from text editor on
  //my chromebook 052115 2244 hrs
$product_description = $_POST['product_description'];
$list_price = $_POST['list_price'];
//$list_price = filter_input(INPUT_POST, 'list_price');
$discount_percent = $_POST['discount_percent'];

//Calculate discount and discounted price
$discount = $list_price * $discount_percent * .01;
$discount_price = $list_price - $discount;

//Apply currency formatting
$list_price_formatted = "$".number_format($list_price, 2);
$discount_percent_formatted = number_format($discount_percent,1)."%";
$discount_formatted = "$".number_format($discount, 2);
$discount_price_formatted = "$".number_format($discount_price, 2); 

//Escape the unformatted input
$product_description_escaped = htmlspecialchars($product_description);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Product Discount Calculator</title>
  <link type="text/css" href="main.css">
</head>

<body>
  <main>
    <h1>Product Discount Calculator</h1>
    <label>Product Description</label>
    <span><?php echo $product_description_escaped;?></span>
    <br>
    
    <label>List Price</label>
    <span><?php echo $list_price_formatted;?></span>
    <br>
    
    <label>Standard Discount</label>
    <span><?php echo $discount_percent_formatted;?></span>
    <br>
    
    <label>Discount Amount</label>
    <span><?php echo $discount_formatted;?></span>
    <br>
    
    <label>Discount Price</label>
    <span><?php echo $discount_price_formatted;?></span>
    <br>
  </main>
</body>
</html>