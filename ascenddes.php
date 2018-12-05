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
<h1>Here are their purchases ascending by description</h1>
<?php
        $whichCustomer= $_POST["customers"]; //customer id
        $query = 'SELECT * FROM purchase, product WHERE purchase.productid = product.productid AND customerid="' . $whichCustomer . '" ORDER BY description';
        // ascendign by description
	$result=mysqli_query($connection,$query);
        if (!$result) {
                die("database query2 failed.");
        }
	//print out only description of product
        while ($row=mysqli_fetch_assoc($result)) {
                echo '<li>';
                echo $row["description"];
        }
        mysqli_free_result($result);
        mysqli_close($connection);
?>
</body>
</html>
