<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Assignment 2 Database-New Purchase</title>
</head>
<body>
<?php
	include 'connectdb.php';
?>
<h1>Updated Purchases:</h1>
//update database with new purchase and info
<?php
	$whichCus = $_POST["choosecus"]; //customer id
	$whichProd = $_POST["chooseprod"]; //product id
	$howMuch = $_POST["quantity"]; //how much theybought
	//add new purchase to purchase table
	$query = 'INSERT INTO purchase VALUES("' . $whichCus . '","' . $whichProd . '","' . $howMuch . '") ON DUPLICATE KEY UPDATE quantity = quantity + "' . $howMuch . '"';
        $result=mysqli_query($connection,$query);
        if (!$result) {
                die("database query2 failed.");
        }
        echo "Your purchase was added!";
	mysqli_close($connection);
?>
</body>
</html>
