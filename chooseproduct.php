<?php // radio list of products to update purchases
	$query = "SELECT * FROM product ORDER BY description";//product tableordered by description
	$result = mysqli_query($connection,$query);
	if (!$result) {
        	die("databases query failed.");
	}
	echo "What Are They Buying? </br>";
	//only print out descriotion of produc in radio list
	while ($row = mysqli_fetch_assoc($result)) {
        	echo '<input type="radio" name="chooseprod" value="';
        	echo $row["productid"];
        	echo '">' . $row["description"] . "<br>";
	}
	mysqli_free_result($result);
?>

