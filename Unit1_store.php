 <?php include 'Unit1_header.php';?>
<?php


?>


<html>
<head>
	<title>PHP Store</title>
	<meta charset="UTF-8">
	<meta name="author" content="Lauren Champlin">
	<link rel="stylesheet" href="Unit1_store.css">
	
</head>
<body>

<form action="Unit1_process_order.php" method="post">
        <br>
        <personal>
                <br>
                First Name: <input type="text" name="fname" required><br>
                Last Name: <input type="text" name="lname" required><br>
                E-mail: <input type="email" name="email" required><br>
        </personal>

        <product style="border: 0.25vw red dashed; ">
                <br>
                <select name="products" required>
                        <option value="" disabled selected hidden>Choose a product</option>
                        <option value="coffee">Gummy Bears</option>
                        <option value="tea">Chocolates</option>
                        <option value="milk">Caramels</option>
                </select>
                Quantity: <input type="number" min=1 required><br>
                <p>Would you like to round up to donate?</p>
                <span>
                        <input type="radio" id="yes" name="donate" value="Yes">
                        <label for="Yes">Yes</label><br>
                        <input type="radio" id="css" name="donate" value="No" checked>
                        <label for="No">No</label><br>
                </span>
        </product>
        <input type="submit">
</form>

</body>
</html>

 <?php include 'Unit1_footer.php';?>