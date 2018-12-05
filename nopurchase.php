<?php //find all products that no one has purchased
        $query = 'SELECT * FROM product WHERE productid NOT IN (SELECT productid FROM purchase)';
        $result=mysqli_query($connection,$query);
        if (!$result) {
                die("database query2 failed.");
        }
        echo "<ol>";
	//lists products by description
        while ($row = mysqli_fetch_assoc($result)) {
                echo "<li>";
                echo $row["description"] . "</li>";
        }
        mysqli_free_result($result);
        echo "</ol>";
?>
