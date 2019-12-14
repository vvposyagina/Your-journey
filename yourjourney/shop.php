<?php

define('INCLUDE_CHECK',1);
require "connect1.php";

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>On-line shop</title>

<link rel="stylesheet" type="text/css" href="demo.css" />

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>
<script type="text/javascript" src="simpletip/jquery.simpletip-1.3.1.pack.js"></script> <!-- плагин к jQuery simpletip -->
<script type="text/javascript" src="script.js"></script> <!-- наш script.js -->

<!--[if lt IE 7]>
<style type="text/css">
	.pngfix { behavior: url(pngfix/iepngfix.htc);}
    .tooltip{width:200px;};
</style>
<![endif]-->

<html>
	<body>
<div id="main-container"> <!-- основной контент -->	
<div class="tutorialzine">	<!-- заголовок -->
<h1>Basket</h1>
<h3> Best tours</h3>
</div>

<div class="container">	<!-- первая секция - товары -->

<span class="top-label">
<span class="label-txt">Tours</span>	<!-- название секции -->
</span>

<div class="content-area">
<div class="content drag-desired">	<!-- assigning a common content class and an individually targeted drag-desired class -->
<?php
	$result = mysql_query("SELECT * FROM internet_shop");	// выбираем все товары
		while($row=mysql_fetch_assoc($result))
		{
			echo '<div class="product"><img src="img/products/'.$row['img'].'" alt="'.htmlspecialchars($row['name']).'" width="128" height="128" class="pngfix" /></div>';
		}

// php-код, который генерирует товары
?>

<div class="clear"></div>	<!-- чистка потока -->
</div>
</div>

<div class="bottom-container-border">	<!-- нижняя часть секции -->
</div>

</div>	<!-- окончание секции товаров -->

<div class="container">	<!-- вторая секция- корзина-->

<span class="top-label">
<span class="label-txt">Basket</span>	<!-- название секции -->
</span>

<div class="content-area">
<div class="content drop-here">	<!-- content class, shared with the product section above, and the targeted drop-here class -->
<div id="cart-icon">
<img src="img/Shoppingcart_128x128.png" alt="shopping cart" class="pngfix" width="128" height="128" />	<!-- использование класса pngfix-->
<img src="img/ajax_load_2.gif" alt="loading.." id="ajax-loader" width="16" height="16" />	<!-- прелоадер - спрятан по умолчанию, и отображается когда работает AJAX -->
</div>

<form name="checkoutForm" method="post" action="order.php">	<!-- форма -->
<div id="item-list">	<!-- в этот блок мы вставим все товары корзины -->

</div>
</form>	<!-- конец формы -->

<div class="clear"></div>	<!-- чистка потока -->

<div id="total"></div>	<!-- здесь расположена общая сумма -->
<div class="clear"></div>	<!-- чистка потока -->

<a href="" onclick="document.forms.checkoutForm.submit(); return false;" class="button">
	Execute
</a>	<!-- кнопка отправки заказа, спрятана по умолчанию. обратите внимание на атрибут onclick -->

</div>
</div>

<div class="bottom-container-border">	<!-- нижняя часть секции -->
</div>

</div><!-- конец основного контейнера -->
	</body>
</html>

