<?php
// указываем хост, логин и пароль
$db=mysql_connect("localhost", "root")
or die("Can't connect");
print ("The connection is made");
// делаем image текущей базой данных
mysql_select_db ("image", $db) 
or die ('Cant select database');
?>
