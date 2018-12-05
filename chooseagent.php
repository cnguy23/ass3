<?php //create list of agents
	$query = "SELECT * FROM agent ORDER BY lastname"; //agent table ordered by last name
	$result = mysqli_query($connection,$query);
	if (!$result) {
        	die("databases query failed.");
	}
	echo "Agent </br>";
	// radiobutton showing agent first and last name
	while ($row = mysqli_fetch_assoc($result)) {
        	echo '<input type="radio" name="chooseagent" value="';
        	echo $row["agentid"];
        	echo '">' . $row["firstname"] . " " . $row["lastname"] . "<br>";
	}
	mysqli_free_result($result);
?>

