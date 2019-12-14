<?php
define('INCLUDE_CHECK',1);
require "../connect1.php";

if(!$_POST['img']) die("There are no such goods!");

$img=mysql_real_escape_string(end(explode('/',$_POST['img'])));

$row=mysql_fetch_assoc(mysql_query("SELECT * FROM internet_shop WHERE img='".$img."'"));

if(!$row) die("There are no such goods!");

echo '<strong>'.$row['name'].'</strong>
<p class="descr">'.$row['description'].'</p>
<strong> price: $'.$row['price'].'</strong>
<small>To buy, simply drag it to the trash</small>';

 ;?>