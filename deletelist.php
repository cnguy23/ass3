<?php // radio button of cutomers to delete
	$query = "SELECT * FROM customer";//customer table
	$result = mysqli_query($connection,$query);
	if (!$result) {
        	die("databases query failed.");
	}
	echo "Which customer would you like to delete? </br>";
	//radio of customer ids
	while ($row = mysqli_fetch_assoc($result)) {
        	echo '<input type="radio" name="delete" value="';
        	echo $row["customerid"];
        	echo '">' . $row["customerid"] . "<br>";
	}
	mysqli_free_result($result);
?>
