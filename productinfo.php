<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Assignment 2 Database-Product Info</title>
</head>
<body>
<?php
        include 'connectdb.php';
?>
<h1>Information About This Product</h1>
<?php
        $prod = $_POST["chooseprod2"];//product id to find info about
	//find quantity of product purchaced, descriptioon, total money made
        $query = 'SELECT SUM(quantity), description, costper*SUM(quantity) FROM purchase, product WHERE product.productid = purchase.productid and purchase.productid = "' . $prod . '" GROUP BY purchase.productid';
        $result=mysqli_query($connection,$query);
        if (!$result) {
                die("database query2 failed.");
        }
        $row=mysqli_fetch_assoc($result);
	//display info
	echo $row["description"] . "<br>";
	echo "Total Purchases: " . $row["SUM(quantity)"] . "<br>";
	echo "Total Money Made: " . $row["costper*SUM(quantity)"] . "<br>";
        mysqli_close($connection);
?>
</body>
</html>
