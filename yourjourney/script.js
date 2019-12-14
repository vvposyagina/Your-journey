var purchased=new Array();	//массив, содержащий все товары, которые мы приобрели
var totalprice=0;	//цена

$(document).ready(function(){

$('.product').simpletip({	//используем плагин simpletip

	offset:[40,0],
	content:'<img style="margin:10px;" src="img/ajax_load.gif" alt="loading" />',	// контент по умолчанию
	onShow: function(){

		var param = this.getParent().find('img').attr('src');
		// fix для IE6
		if($.browser.msie && $.browser.version=='6.0')
		{
			param = this.getParent().find('img').attr('style').match(/src=\"([^\"]+)\"/);
			param = param[1];
		}

		// после того как отображена подсказка, загружаем файл tips.php и передаем название изображения в качестве параметра
		this.load('ajax/tips.php',{img:param});
	} 

});

$(".product img").draggable({	// разрешаем перетаскивание картинок товаров

containment: 'document',
opacity: 0.6,
revert: 'invalid',
helper: 'clone',
zIndex: 100

});

$("div.content.drop-here").droppable({	// разрешаем выгружать товары в корзину

		drop:
			function(e, ui)
			{
				var param = $(ui.draggable).attr('src');
				// IE6 fix
				if($.browser.msie && $.browser.version=='6.0')
				{
					param = $(ui.draggable).attr('style').match(/src=\"([^\"]+)\"/);
					param = param[1];
				}

				addlist(param);	// специальная функция addlist - смотрите ниже
			}

});


});

//вторая часть скрипта

function addlist(param)
{
	// функция addlist добавляет товар в корзину

	$.ajax({	// посылаем ajax-request в addtocart.php
	type: "POST",
	url: "ajax/addtocart.php",
	data: 'img='+encodeURIComponent(param),	// картинка товара в качестве параметра
	dataType: 'json',	// ждем json
	beforeSend: function(x){$('#ajax-loader').css('visibility','visible');},	// отображаем прелоадер
	success: function(msg){

		$('#ajax-loader').css('visibility','hidden');	// прячем прелоадер
		if(parseInt(msg.status)!=1)
		{
			return false;	// если обнаружена ошибка, возвращаем false
		}
		else
		{
			var check=false;
			var cnt = false;

			for(var i=0; i<purchased.length;i++)
			{
				if(purchased[i].id==msg.id)	// ищем, не покупали ли мы этот товар ранее
				{
					check=true;
					cnt=purchased[i].cnt;

					break;
				}
			}

			if(!cnt)	// если еще не покупали, или удалили из покупок, то вставляем в корзину
				$('#item-list').append(msg.txt);

			if(!check)	// если еще не купили, вставляем в массив покупок
			{
				purchased.push({id:msg.id,cnt:1,price:msg.price});
			}

			else	// иначе, если купили
			{
				if(cnt>=3) return false;	// больше 3 товаров

				purchased[i].cnt++;
				$('#'+msg.id+'_cnt').val(purchased[i].cnt);	// обновляем select box
			}

			totalprice+=msg.price;	// пересчитываем стоимость recalculate the price
			update_total();	// обновляем блок общей стоимости
		}

		$('.tooltip').hide();	// прячем подсказку (иногда она остается после перетаскивания)

	}
	});
}

function findpos(id)	// полезная функция, помогающая найти поизицию товара в массиве, возвращаяя ее
{
	for(var i=0; i<purchased.length;i++)
	{
		if(purchased[i].id==id)
			return i;
	}

	return false;
}

function remove(id)	// удаляем товары из корзины
{
	var i=findpos(id);	// находим их позицию в массиве

	totalprice-=purchased[i].price*purchased[i].cnt;	// пересчитываем стоимость
	purchased[i].cnt = 0;	// сбрасываем счетчик

	$('#table_'+id).remove();	// удаляем их из таблицы
	update_total();	// обновляем счетчик общей стоимости на странице
}

function change(id)	// вызывается когда мы изменям количество товаров в селекте
{
	var i=findpos(id);

	totalprice+=(parseInt($('#'+id+'_cnt').val())-purchased[i].cnt)*purchased[i].price;

	purchased[i].cnt=parseInt($('#'+id+'_cnt').val());
	update_total();
}

function update_total()	// фунция, которая обновляет блок с общей стоимостью на странице
{
	if(totalprice)
	{
		$('#total').html('всего: $'+totalprice); // Если мы купили что-нибудь, отобразить блок с общей стоимостью и кнопку оформления
		$('a.button').css('display','block');
	}
	else	// прячем их
	{
		$('#total').html('');
		$('a.button').hide();
	}
}

