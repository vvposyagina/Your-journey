<?php
$url="data.txt"; //���� �� �����
$content = file($url);//�������� ������ �����
    for($i=0;$i<=count($content)-1;$i++) {//��������� ����
    list($name,$mail,$text) = explode("::",$content[$i]);//��������� ������ �� ������ ������
    echo "<a href=\"mailto:$mail\">$name</a>
    <br/>$text<br/><br/>";//������� ���������� � �������
 }
?>
