<?php
$url="data.txt";
// substr() ���������� ��������� ������ string ������ length, ������������� � start ������� �� �����.
$name = strip_tags(stripslashes(substr($_POST['data']['0'],0,20)));
$mail = strip_tags(stripslashes(substr($_POST['data']['1'],0,30)));
$text = strip_tags(stripslashes(substr($_POST['data']['2'],0,300)));
if($_POST['add'] != '') {
    if($name != '') {
        if($mail !='') {
            if($text != '') {
            if(!file_exists($url)) {
   
//���� ����� �� ����������, ������� ���, � ���������� ������� �������� (implode � ���������� �������� ������� � ������)

$data = implode("::",$_POST['data']);
// implode -- ���������� �������� ������� � ������

$handle = fopen($url,"a");
// fopen  - ��������� ���� ��� URL

fwrite($handle,$data."\n");

// fwrite() ���������� ���������� string � �������� ����� handle. ���� ������� �������� length, ������ ����������� ����� ����, ��� length ������ ����� �������� ��� ����� ��������� ����� ������ string, ������ ��� ��������� ������.

fclose($handle);
// fclose - ������� ��������� ����, �� ������� ��������� handle.
 echo "<a href=\"guest.php\">���������� �����������</a>";
}
else {
 //���� ���� ����������, �� �������� � ���
$data = implode("::",$_POST['data']);
$handle = fopen($url,"a");
fwrite($handle,$data."\n");
fclose($handle);
 echo "<a href=\"guest.php\">���������� �����������</a>";
 }
 }
 else {echo "������� �����������";}
 }
 else {echo "������� e-mail";}
 }
 else { echo "������� ���"; }
 }
 else {echo "<a href=\"guest.php\">�����</a>";  };
?>
