 <?php include 'Unit1_header.php';?>
<?php


?>


<html>
<head>
	<title>PHP Store</title>
	<meta charset="UTF-8">
	<meta name="author" content="Lauren Champlin">
	<link rel="stylesheet" href="Unit1_store.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>
<body>

<form action="Unit1_process_order.php" method="post">
        <span>
        <br>
        <div class="personal">
        <fieldset class="personal">
    <legend>Personal</legend>
                <br>
                First Name: * <input type="text" name="fname" required pattern="[a-zA-Z'].{1,}"><br>
                Last Name: * <input type="text" name="lname" required pattern="[a-zA-Z'].{1,}"><br>
                E-mail: * <input type="email" name="email" required><br>
        </fieldset>
        </div>

          <div class="product">
   <fieldset class="product">
    <legend>Product</legend>
                <br>
                <select name="products" required>
                        <option value="" disabled selected hidden>Choose a product*</option>
                        <option id="gummy_bears" value="Gummy Bears-5" onclick=showImage(value)>Gummy Bears - $5</option>
                        <option id="chocolates" value="Chocolates-3">Chocolates - $3</option>
                        <option id="caramels" value="Caramels-8">Caramels - $8</option>
                </select>
                <br>
                Quantity: * <input type="number" name="quantity" min=1 max=100  value=1 required><br>
</fieldset>
                <p>Would you like to round up to donate?</p>
                <span>
                        <input type="radio" id="yes" name="donate" value=1>
                        <label for="Yes">Yes</label><br>
                        <input type="radio" id="css" name="donate" value=0 checked>
                        <label for="No">No</label><br>
                </span>
</div>
        <button type="submit">Purchase</button>
</span>

</form>
<div class="picture">
        <p>Select a product to see it here</p>
        <img id="picture">
</div>
</body>
</html>

 <?php include 'Unit1_footer.php';?>

<script>
     $('select').on('change', function (e) {
        var optionSelected = $("option:selected", this);
        var valueSelected = optionSelected.attr("id");
    $('#picture').attr("src", "images/"+valueSelected+".jpg");
});
</script>