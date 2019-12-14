<?php
$url="data.txt"; //путь до файла
$content = file($url);//Получаем массив строк
    for($i=0;$i<=count($content)-1;$i++) {//запускаем цикл
    list($name,$mail,$text) = explode("::",$content[$i]);//Разбиваем строку на нужные данные
    echo "<a href=\"mailto:$mail\">$name</a>
    <br/>$text<br/><br/>";//Выводим информацию в браузер
 }
?>
