<?php //radio of cusotmers and info
	$query = "SELECT * FROM customer ORDER BY lastname";//customer list ordered by lastnaem
	$result = mysqli_query($connection,$query);
	if (!$result) {
		die("databases query failed.");
	}
	echo "Choose a customer to see what products they have purchased </br>";
	//radio list of all customer and all their info
	while ($row = mysqli_fetch_assoc($result)) {
		echo '<input type="radio" name="customers" value="';
		echo $row["customerid"];
		echo '">' . $row["customerid"] . "-" . $row["firstname"] . " " . $row["lastname"] . ", City: " . $row["city"] . ", Phone Number: " . $row["phonenumber"] . ", Agent ID: " . $row["agentid"] . "<br>";
	}
	mysqli_free_result($result);
?>
