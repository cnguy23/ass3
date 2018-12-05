<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Assignment 2 Database-Delete Customer</title>
</head>
<body>
<?php
        include 'connectdb.php';
?>
<h1>Updated Customers:</h1>
<?php
        $whichCus = $_POST["delete"];//cusotmer id of who they wanna delete
	//deltes that customer
        $query = 'DELETE FROM customer WHERE customerid = "' . $whichCus . '"';
        $result=mysqli_query($connection,$query);
        if (!$result) {
                die("database query2 failed.");
        }
        echo "The customer has been deleted!";
        mysqli_close($connection);
?>
</body>
</html>
