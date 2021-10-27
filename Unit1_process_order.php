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
<body onload = "onLoad()">
<br>
<p> Thank you for your order, <?php echo $_POST["fname"]; ?> <?php echo $_POST["lname"]; ?> (<?php echo $_POST["email"]; ?>). </p>
<p id="line2">You have selected <?php echo $_POST["quantity"]; ?>  get_product(<?php $_POST["products"];?>) @ get_price(<?php $_POST["products"];?>)<p>
Subtotal: get_price(echo $_POST["products"];) 
Total including tax (3%): $price with tax math
(check bool) Total with donation: $price rounded up to next dollar

</body>
</html>

 <?php include 'Unit1_footer.php';?>


<script>
        function onLoad(){
                $("#line2").innerHTML = <?php $_POST["products"];?>
        }
        function get_product(str){
             console.log(str);
             var words = str.slice(" - ");
             return words[0];
        }
        function get_price(str){
             var words = str.slice(" - ");
             return words[1];
        }
</script>