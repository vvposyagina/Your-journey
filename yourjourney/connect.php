<?php 
mysql_connect("localhost", "root")
//��������� � ������� ("����", "��� ������������", "������") 
or die("<p>������ ����������� � ���� ������! " . mysql_error() . "</p>"); 
mysql_select_db("new_db")

//�������� � ������� ("��� ����, � ������� �����������") 
or die("<p>������ ������ ���� ������! ". mysql_error() . "</p>"); 

//��� ������ ������� ����
mysql_query ("set character_set_client='cp1251'"); // ������������� ��������� �������
mysql_query ("set character_set_results='cp1251'"); // ������� ��������� ���������
mysql_query ("set collation_connection='cp1251_general_ci'");

?>
