<?php //radio list of products for product info
	$query = "SELECT * FROM product ORDER BY description"; //product table ordered by descriotion
	$result = mysqli_query($connection,$query);
	if (!$result) {
        	die("databases query failed.");
	}
	echo "Which Product Do You Want To Know About? </br>";
	//radio list of descriptions
	while ($row = mysqli_fetch_assoc($result)) {
        	echo '<input type="radio" name="chooseprod2" value="';
        	echo $row["productid"];
        	echo '">' . $row["description"] . "<br>";
	}
	mysqli_free_result($result);
?>

