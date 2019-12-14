<html> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251"> 
<link rel="stylesheet" type="text/css" href="style.css"> 
<title>Selected User</title> 
</head> 
<body> 
<div id="qwest1">
	<?php 
		require 'connect.php'; 
		$first_name = trim($_REQUEST['first_name']); 
		$last_name = trim($_REQUEST['last_name']); 
		$sql_select = "SELECT * FROM users WHERE first_name='$first_name' && last_name='$last_name'"; 
		$result = mysql_query($sql_select); 
		$row = mysql_fetch_array($result); 
		if($row) 
		{ 
			printf("<p>User: " .$row['first_name'] . " " .$row['last_name'] ."</p> 
			<p><i>Contact</i></p><p>Адрес: " .$row['ad'] . "</p>
			<p>Data of birthday: " .$row['dat'] . "</p>---------<br/>" ); 
		} 
		else
		{
			echo ("User with the same name in the database<br/><br/>");
		} 
	?> 
		<a href="search.php">Return for search</a><br/>
		<br/> 
		<a href="search.php">Add user</a>
</div>
 
</body> 
</html>
