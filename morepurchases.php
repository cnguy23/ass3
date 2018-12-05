<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Assignment 2 Database-Lots of Products</title>
</head>
<body>
<?php
        include 'connectdb.php';
?>
<h1>Big Spenders</h1>
<?php
        $moreQuant = $_POST["morequant"];//products must be more than this wuantity
	//find customer name, product description and quantity
        $query = 'SELECT firstname, lastname, description, quantity FROM customer, product, purchase WHERE customer.customerid = purchase.customerid and product.productid = purchase.productid and quantity > "' . $moreQuant . '" ORDER BY lastname';
        $result=mysqli_query($connection,$query);
        if (!$result) {
                die("database query2 failed.");
        }
	echo "<ol>";
	//list of customers,products,descriptions
	while ($row = mysqli_fetch_assoc($result)) {
		echo "<li>";
		echo $row["firstname"] . " " . $row["lastname"] . " bought " . $row["quantity"] . " " . $row["description"] . "</li>";
	}
	mysqli_free_result($result);
	echo "</ol>";
        echo "These are the ballers that bought more than " . $moreQuant . " of a product!";
        mysqli_close($connection);
?>
</body>
</html>

