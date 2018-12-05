<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Assignment 2 Database-New Customer</title>
</head>
<body>
<?php
        include 'connectdb.php';
?>
<h1>Updated Customer:</h1>
//will add customer to database using the info the user inputted
<?php
        $fname = $_POST["fname"]; //name variable
        $lname = $_POST["lname"]; 
	$city = $_POST["city"]; //city variable
        $pnum = $_POST["phonenumber"]; //phone number
	$agent = $_POST["chooseagent"]; //agent
	$query1= 'SELECT MAX(customerid) AS maxid FROM customer'; //find highest customerid
	$result1=mysqli_query($connection,$query1);
	if (!$result1) {
		die("database max query failed.");
        }
	$row=mysqli_fetch_assoc($result1);
	$newkey = intval($row["maxid"]) + 1; // assignsnew customer unique id
	$cusid = (string)$newkey;
	//add new customer to database
	$query = 'INSERT INTO customer VALUES("' . $cusid . '","' . $fname . '","' . $lname . '","' . $city . '","' . $pnum . '","' . $agent . '")';
        $result=mysqli_query($connection,$query);
        if (!$result) {
                die("database query2 failed.");
        }
        echo "The customer was added!";
        mysqli_close($connection);
?>
</body>
</html>
