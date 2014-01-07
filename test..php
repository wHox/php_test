<?php
	$db = new mysqli("127.0.0.1", "root", "", "test");

	if ($db->connect_errno) {
   		echo "Failed to connect to MySQL: (" . $db->connect_errno . ") " . $db->connect_error;
	}
	
	$sql = "SELECT first_name, last_name, age 
			FROM members 
			LIMIT 10
		";
    	
	$result = $db->query($sql);

    while($row = $result->fetch_assoc()) {
    	var_dump($row);
    }

    $result->close();

	$db->close();
?>