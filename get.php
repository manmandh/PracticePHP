<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculator</title>
</head>
<body>
    <form action="calculator.php" method= "get" >
        <label for="">quantity: </label> <br>
        <input type="text" name = "quantity"> <br>
        <input type="submit" name = "total">
        </form>
</body>
</html>

<?php
$item = "pizza";
$price = 6;
$quantity = $_GET["quantity"];
$total = null;

$total = $quantity * $price;

echo "You have ordered {$quantity} x {$item}/s";
echo"</br>";
echo "Your total is: \${$total}";

?>