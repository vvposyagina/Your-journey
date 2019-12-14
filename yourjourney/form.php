<html> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251"> 
<title>Form of input</title> 
</head> 
<body>

<?php 
require 'connect.php';

$first_name = $_REQUEST['first_name']; 
$last_name = $_REQUEST['last_name']; 
$ad = $_REQUEST['ad']; 
$dat = $_REQUEST['dat'];
$insert_sql = "INSERT INTO users (first_name, last_name, ad, dat)" . "VALUES('{$first_name}', '{$last_name}', '{$ad}', '{$dat}');"; 
mysql_query($insert_sql);

echo "<p>New record added to the database!</p>"; 
?> 

<a href="index.php">Main page</a><br><br>
<a href="select_user.php">Find new clients</a><br>

</body> 
</html>
