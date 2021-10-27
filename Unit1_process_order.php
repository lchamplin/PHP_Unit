 <?php include 'Unit1_header.php';?>


<?php
$product = explode(" - ", $_POST["products"])[0];
$price = explode(" - ", $_POST["products"])[1];
console.log(explode(" - ", $_POST["products"]));
$float_price = floatval(substr($price, 1));
$tax_price = $float_price * 1.03;
$round_price = ceil($tax_price);

$donation = "";
if(0 == strcmp($_POST["donate_yes"], "Yes")){
        $donation = "Total with donation: " . strval($round_price);
}

?>


<html>
<head>
	<title>PHP Store</title>
	<meta charset="UTF-8">
	<meta name="author" content="Lauren Champlin">
	<link rel="stylesheet" href="Unit1_common.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>
<body>
<br>
<br>
<p>Thank you for your order, <?php echo $_POST["fname"]; ?> <?php echo $_POST["lname"]; ?> (<?php echo $_POST["email"]; ?>). </p>
<p>You have selected <?php echo $_POST["quantity"]; ?>  <?php echo $product;?> @ <?php echo $price;?></p>
<p>Subtotal: <?php echo $price;?></p>
<p>Total including tax (3%): <?php echo $tax_price;?></p>
<p><?php echo $donation ?></p>

</body>
</html>

 <?php include 'Unit1_footer.php';?>

