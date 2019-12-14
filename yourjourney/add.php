<?php
$url="data.txt";
// substr() возвращает подстроку строки string длиной length, начинающегося с start символа по счету.
$name = strip_tags(stripslashes(substr($_POST['data']['0'],0,20)));
$mail = strip_tags(stripslashes(substr($_POST['data']['1'],0,30)));
$text = strip_tags(stripslashes(substr($_POST['data']['2'],0,300)));
if($_POST['add'] != '') {
    if($name != '') {
        if($mail !='') {
            if($text != '') {
            if(!file_exists($url)) {
   
//Если файла не существует, создаем его, и записываем нулевое значение (implode – объединяет элементы массива в строку)

$data = implode("::",$_POST['data']);
// implode -- Объединяет элементы массива в строку

$handle = fopen($url,"a");
// fopen  - Открывает файл или URL

fwrite($handle,$data."\n");

// fwrite() записывает содержимое string в файловый поток handle. Если передан аргумент length, запись остановится после того, как length байтов будут записаны или будет достигнут конец строки string, смотря что произойдёт первым.

fclose($handle);
// fclose - Функция закрывает файл, на который указывает handle.
 echo "<a href=\"guest.php\">посмотреть комментарий</a>";
}
else {
 //Если файл существует, то работаем с ним
$data = implode("::",$_POST['data']);
$handle = fopen($url,"a");
fwrite($handle,$data."\n");
fclose($handle);
 echo "<a href=\"guest.php\">посмотреть комментарий</a>";
 }
 }
 else {echo "Введите комментарий";}
 }
 else {echo "Введите e-mail";}
 }
 else { echo "Введите имя"; }
 }
 else {echo "<a href=\"guest.php\">назад</a>";  };
?>
