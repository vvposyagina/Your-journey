<link rel="stylesheet" type="text/css" href="demo.css"/>

<?php
include ("bd1.php"); //подключение к базе данных

if (isset($_POST['img']))

// Если поле выбора картинки не пустое - закачиваем её на сервер
$maxwidth = "600"; // максимальная ширина картинок на превью
$foto_dir = "img/"; // Директория для фотографий товаров
$foto_name = $fotos_dir.time()."_".basename ($_FILES['myfile']['name']); // Полное имя файла вместе с путем
$foto_light_name = time()."_".basename ($_FILES['myfile']['name']); 
// Имя файла исключая путь
$foto_tag = "<img src=\"$foto_name\" border=\"0\">"; // Готовый тэг для вставки картинки на страницу
$foto_tag_preview = "<img src=\"$foto_name\" border=\"0\" width=\"$maxwidth\">"; 
// Тот же тэг, но для превью

// Текст ошибок
$error_by_mysql = "<label class=\"label\"> Ошибка при добавлении данных в базу</span>";
$error_by_file = "<label class=\"label\">Невозможно загрузить файл в директорию. Возможно её не существует</span>";


// Начало
if(isset($_FILES["myfile"]))
{
$myfile = $_FILES["myfile"]["tmp_name"];
$myfile_name = $_FILES["myfile"]["name"];
$myfile_size = $_FILES["myfile"]["size"];
$myfile_type = $_FILES["myfile"]["type"];
$error_flag = $_FILES["myfile"]["error"];

// Если ошибок не было
if($error_flag == 0)
{
$DOCUMENT_ROOT = $_SERVER['DOCMENT_ROOT'];
$upfile = getcwd()."/img/" . time()."_".basename ($_FILES["myfile"]["name"]);
if ($_FILES['myfile']['tmp_name'])
{

//Если не удалось загрузить файл

if (!move_uploaded_file($_FILES['myfile'] ['tmp_name'], $upfile))
{
echo "$error_by_file";
exit;
}

}
else
{
echo 'Problem: possible attack via download file. ';
echo $_FILES['myfile']['name'];
exit;
}

$q = "INSERT INTO 3_images (img) VALUES ('$foto_name')";
$query = mysql_query($q);

// Данные успешно внесены в базу данных, выводим сообщение
if ($query == 'true') {
echo "<div class='text'>
<p>The picture has been successfully added to the server!</p>
<br><br>
<table>
<tr>
<td>
<a href='photo.php' class='add_images'><div class='add_images_text'>
TO ADD A PICTURE</div></a>
</td>
<td>
<a href='indeximg.php' class='add_images'>
<div class='add_images_text'>ON MAIN PAGE</div></a>
</td>
</tr>
</table>
</div>";
}

// В противном случае, выводим ошибку при добавлении в базу данных
else {
echo "$error_by_mysql";
}
}
elseif ($myfile_size == 0) {
echo "<br><label class='label'>
The picture is not selected!<br><br>
Go back and select the picture!</label><br><br>
<a href='photo.php' class='add_images'>
<div class='add_images_text'>TO CHOOSE A PICTURE</div>
</a>";
}
}
?>
