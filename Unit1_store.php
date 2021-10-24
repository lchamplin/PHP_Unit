<?php


?>

<html>
<body>

<form action="welcome.php" method="post">
        <div id="personal">
                First Name: <input type="text" name="fname" required><br>
                Last Name: <input type="text" name="lname" required><br>
                E-mail: <input type="email" name="email" required><br>
        </div>

        <div id="product">
                <select name="products" required>
                        <option value="" disabled selected hidden>Choose a product</option>
                        <option value="coffee">Gummy Bears</option>
                        <option value="tea">Chocolates</option>
                        <option value="milk">Caramels</option>
                </select>
                Quantity: <input type="number" min=1 required><br>
                <p>Would you like to round up to donate?</p>
                <input type="radio" id="yes" name="donate" value="Yes">
                <label for="Yes">Yes</label><br>
                <input type="radio" id="css" name="donate" value="No">
                <label for="No">Yes</label><br>
        </div>
        <input type="submit">
</form>

</body>
</html>