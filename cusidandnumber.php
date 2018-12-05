<?php // radio list of cutomerid and phome number
	$query = "SELECT * FROM customer"; //customer table
	$result = mysqli_query($connection,$query);
	if (!$result) {
        	die("databases query failed.");
	}
	echo "Which customer's phone number would you like to change? </br>";
	//radio list with cusomer id them number
	while ($row = mysqli_fetch_assoc($result)) {
        	echo '<input type="radio" name="cusnumber" value="';
        	echo $row["customerid"];
        	echo '">' . $row["customerid"] . ": " . $row["phonenumber"] . "<br>";
	}
	mysqli_free_result($result);
?>

