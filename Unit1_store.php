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
        <div class="personal">
        <fieldset class="personal">
                <br>
                First Name: <input type="text" name="fname" required pattern="/^([a-zA-Z ']*)$/"><br>
                Last Name: <input type="text" name="lname" required pattern="/^([a-zA-Z ']*)$/"><br>
                E-mail: <input type="email" name="email" required><br>
        </fieldset>
        </div>

          <div class="product">
   <fieldset class="product">
                <br>
                <select name="products" required>
                        <option value="" disabled selected hidden>Choose a product</option>
                        <option value="gummy_bears" onclick=showImage(value)>Gummy Bears - $5</option>
                        <option value="chocolates">Chocolates - $3</option>
                        <option value="caramels">Caramels - $8</option>
                </select>
                Quantity: <input type="number" min=1 max=100  value=1 required><br>
                <p>Would you like to round up to donate?</p>
                <span>
                        <input type="radio" id="yes" name="donate" value="Yes">
                        <label for="Yes">Yes</label><br>
                        <input type="radio" id="css" name="donate" value="No" checked>
                        <label for="No">No</label><br>
                </span>
</fieldset>
</div>
        <input type="submit">
</form>

<div class="picture">
        <p>Select a product to see it here</p>
        <img height=100 width=100 id="image">
</div>

</body>
</html>

 <?php include 'Unit1_footer.php';?>

<script>
        function showImage(name){
                $("#image").attr("src", name+".jpg")
        }
    }
});

</script>