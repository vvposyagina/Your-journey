<?php 
mysql_connect("localhost", "root")
//параметры в скобках ("хост", "имя пользователя", "пароль") 
or die("<p>Ошибка подключения к базе данных! " . mysql_error() . "</p>"); 
mysql_select_db("INCLUDE_CHECK")

//параметр в скобках ("имя базы, с которой соединяемся") 
or die("<p>Ошибка выбора базы данных! ". mysql_error() . "</p>"); 

//для вывода русских букв
mysql_query ("set character_set_client='cp1251'"); // устанавливает кодировку клиента
mysql_query ("set character_set_results='cp1251'"); // выводит результат кодировки
mysql_query ("set collation_connection='cp1251_general_ci'");

?>