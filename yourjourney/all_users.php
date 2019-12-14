<html> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251"> 
<link rel="stylesheet" type="text/css" href="style.css"> <title>Selected User</title> 
</head> 
<body> 
<div id="qwest1">
	<?php 
		require 'connect.php'; 

		$sql_select = "SELECT * FROM users"; 
		$result = mysql_query($sql_select); 
		$row = mysql_fetch_array($result); 
		do 
		{ 
			printf("<br>Client: " .$row['first_name'] . " " .$row['last_name'] ."<br> 
			<i>Contact data</i></br>Address: " .$row['ad'] . "
			<br>Date of birthday: " .$row['dat'] . "</br>---------<br/>" ); 
		} 
		while($row = mysql_fetch_array($result)); 
	?> 

	<a href="search.php"> Return for search</a><br/><br/> 
	<a href="search.php">Add client</a> 
</div>

</body> 
</html>
