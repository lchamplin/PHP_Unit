 <?php include 'Unit1_header.php';?>
<?php


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

Thank you for your order, <?php echo $_POST["fname"]; ?> <?php echo $_POST["lname"]; ?> (<?php echo $_POST["email"]; ?>).
You have selected <?php echo $_POST["quantity"]; ?>  get_product(<?php echo $_POST["products"];?>) @ get_price(<?php echo $_POST["products"];?>) 
Subtotal: get_price(echo $_POST["products"];) 
Total including tax (3%): $price with tax math
(check bool) Total with donation: $price rounded up to next dollar

</body>
</html>

 <?php include 'Unit1_footer.php';?>


<script>
     function get_product(str){
             var words = str.slice(" - ");
             return words[0];
     }
     function get_price(str){
             var words = str.slice(" - ");
             return words[1];
     }
</script>