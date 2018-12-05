<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Assignment 2 Database</title>
</head>
<body>
<?php
	include 'connectdb.php';
?>
<h1>Buy Things Co.</h1>
<h2>Customers</h2>
<form action="ascenddes.php" method="post">
<?php
        include 'getcustomer.php';//load in customers radio button
?>
<input type="submit" value="Ascending By Description">
</form>
<form action="descenddes.php" method="post">
<?php
        include 'getcustomer.php';//load in cusotmer radio 
?>
<input type="submit" value="Descending By Description">
</form>
<form action="ascendprice.php" method="post">
<?php
        include 'getcustomer.php';//load in cutomer radio
?>
<input type="submit" value="Ascending By Price">
</form>
<form action="descendprice.php" method="post">
<?php
        include 'getcustomer.php';//load in cutomer radio
?>
<input type="submit" value="Descending By Price">
</form>
<p>
<hr>
<p>
<h2>Add New Purchases</h2>
<form action="addnewpurchase.php" method="post">
<?php
	include 'choosecustomer.php'; //makes radio buttoms for customer
?>
<?php
	include 'chooseproduct.php'; //makes radio buttons for products
?>
Quantity: <input type="text" name="quantity"><br>
<input type="submit" value="Add New Purchase">
</form>
<p>
<hr>
<p>
<h2>Add New Customer</h2>
<form action="addnewcustomer.php" method="post">
First Name: <input type="text" name="fname"><br>
Last Name: <input type="text" name="lname"><br>
City: <input type="text" name="city"><br>
Phone Number: <input type="text" name="phonenumber"><br>
<?php
        include 'chooseagent.php'; //radio buttons for agent
?>
<input type="submit" value="Add New Customer">
</form>
<p>
<hr>
<p>
<h2>New Customer Phone Number?</h2>
<form action="newnumber.php" method="post">
<?php
        include 'cusidandnumber.php'; //makes radio button of customers id and phone number
?>
New Phone Number <input type="text" name="pnumber"><br>
<input type="submit" value="Change Phone Number">
</form>
<p>
<hr>
<p>
<h2>Delete A Customer</h2>
<form action="deletecustomer.php" method="post">
<?php
        include 'deletelist.php';//radio buttom of customers to delete
?>
<input type="submit" value="Delete Customer">
</form>
<p>
<hr>
<p>
<h2>Who Bought Lots of Which Things?</h2>
<form action="morepurchases.php" method="post">
Who bought which products in more quantity than this: <input type="text" name="morequant"><br>
<input type="submit" value="Find Big Spenders">
</form>
<p>
<hr>
<p>
<h2>Which Products Have Not Been Bought?</h2>
<?php
        include 'nopurchase.php'; //finds out and displays which products havent been bought
?>
<p>
<hr>
<p>
<h2>Product Information</h2>
<form action="productinfo.php" method="post">
<?php
        include 'chooseproduct2.php'; //radio buttons of products
?>
<input type="submit" value="Get Product Info">
</form>
<?php
	mysqli_close($connection);
?>
</body>
</html>
