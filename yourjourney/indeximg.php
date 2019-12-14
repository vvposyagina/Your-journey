<link rel="stylesheet" type="text/css" href="demo.css"/>

<?php
echo"<a href='photo.php' class='add_images'>
<div class='add_images_text'>ADD IMAGE</div>
</a><br><br>";
include ("bd1.php"); //подключение к базе данных

$sql = mysql_query("SELECT id, img FROM 3_images"); 
// Выбор из базы данных полей id и img

if (!$sql)
{
exit();
}
if (mysql_num_rows($sql) > 0)
{
@$row=mysql_fetch_array($sql);
$i=1;
do
{
echo "<table><tr><td valign='top'>";
echo $i++;
echo "<td>";
echo "<img src='img/$row[img]' class='img'/>";
echo "</td></tr></table><br>";
}
while (@$row = mysql_fetch_array($sql));
}
else
{
echo "<label class='label'>The database contains no added symbols!</label>";
exit();
}
?>
