<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Assignment 2 Database-New Number</title>
</head>
<body>
<?php
        include 'connectdb.php';
?>
<h1>Updated Number:</h1>
<?php
        $whichCus= $_POST["cusnumber"];//cusotmer id to be changes
	$newnum = $_POST["pnumber"];//new number
	//update table with new number for customer
        $query = 'UPDATE customer SET phonenumber = "' . $newnum . '" WHERE customerid = "' . $whichCus . '"';
        $result=mysqli_query($connection,$query);
        if (!$result) {
                die("database query2 failed.");
	}
	echo "The number was changed!";
	mysqli_close($connection);
?>
</body>
</html>
