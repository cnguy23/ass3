<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Assignment 2 Database-Customer Purchases</title>
</head>
<body>
<?php
	include 'connectdb.php';
?>
<h1>Here are their purchases</h1>
<?php
	$whichCustomer= $_POST["customers"];//customer id to see purchase
	//find purchase of that customer
	$query = 'SELECT * FROM purchase, product WHERE purchase.productid = product.productid AND customerid="' . $whichCustomer . '"';
	$result=mysqli_query($connection,$query);
	if (!$result) {
		die("database query2 failed.");
	}
	//list of purchases by descriotion
	while ($row=mysqli_fetch_assoc($result)) {
		echo '<li>';
		echo $row["description"];
	}
	mysqli_free_result($result);
	mysqli_close($connection);
?>
</body>
</html>
