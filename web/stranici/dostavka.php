<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <header><table border="0" width="900" cellpadding="0" cellspacing="0" align="center" bgcolor="#ff8000">
	<tr>
	<td width="150" align="center"><a href="/index.php">
      <img src="https://ctepx.ru/wa-data/public/shop/products/10/webp/data/public/site/themes/profitshop_2019_12_24/img/logo.webp?v1710244587?v1.0.9.205">
        </a></td>
	<td align="center"><H1 class ="coolZagolovok">Салон штор</H1></td>
	<td width="200">
		<table  cellpadding="5"  width="100%">
			
					<tr>
				<td align="right">
                            <a href="/stranici/vhod.php">Вход</a><br>
                            <a href="/stranici/registraci.php">Регистрация</a><br>
                            <a href="/logout.php">Выйти</a>
<?php
session_start();
require '../db.php'; // Подключение к базе данных

// Проверка сессии и вывод имени пользователя
if (isset($_SESSION['username'])) {
    echo '<p>Привет, ' . htmlspecialchars($_SESSION['username']) . '!</p>';
} else {
    echo '<p>Вы не вошли в систему.</p>';
}

// Запрос для получения всех товаров из базы данных
$stmt = $pdo->query('SELECT * FROM products');
$products = $stmt->fetchAll();
?>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</header>
 

<table border="0" width="900" cellpadding="5" cellpadding="0" align="center" >
	<tr bgcolor="#ff8000">
	<td align="center"><a href="\stranici\okompanii.php">О компании</a></td>
  <td align="center"><a href="\stranici\magazin.php">Интернет магазин</a></td>
	<td align="center"><a href="\stranici\dostavka.php">Доставка</a></td>
	<td align="center"><a href="\stranici\jtzivi.php">Отзывы</a></td>
	<td align="center"><a href="\stranici\kontakti.php">Контакты</a></td>
	
	<td align="center"><form action="/search.php" method="GET" style="text-align:center; margin-bottom:20px;">
    <input type="text" name="query" placeholder="Введите название товара" style="width:300px; height:25px; border-radius: 10px;">
    <button type="submit" style="height:30px; border-radius: 10px;">Искать</button>
</form></td>
	</tr>
</table> 
<BR>
<table border="0" width="900" cellpadding="5" cellpadding="0" align="center">
	<tr>
		<td width="150" cellpadding="5" valign="top" align="center" bgcolor="#ff8000">
      <h2>Лента новостей</h2>
			<a href="https://news.ctepx.ru">Восстановлена отправка через СДЭК</a><BR>
      <BR>
			<a href="https://news.ctepx.ru">Приостановка отгрузки через СДЭК</a><BR>
      <BR>
			<a href="https://news.ctepx.ru">Наши жалюзи в Государственном «Эрмитаже»</a><BR>
      <BR>
			<a href="https://news.ctepx.ru">Все новости</a>
		
      <td cellpadding="5" valign="top">
		
			<div class="page page_mb" itemscope="" itemtype="http://schema.org/WebPage"><h1>Доставка заказа</h1><ul class="page-sub"><li class="page-sub__list"><a class="page-sub__link" href="/site/dostavka-zakaza/noindex-o-dostavke-v-vash-gorod/">О доставке в Ваш город</a></li><li class="page-sub__list"><a class="page-sub__link" href="/site/dostavka-zakaza/normativnye-sroki-dostavki-otpravleniy-cherez-pochtu-rossii/">Нормативные сроки доставки отправлений через Почту России</a></li><li class="page-sub__list"><a class="page-sub__link" href="/site/dostavka-zakaza/normativnye-sroki-dostavki-vnutrennikh-otpravleniy-ems/">Сроки доставки внутренних отправлений EMS</a></li></ul><p>Интернет магазин компании «Стерх» предлагает покупателям при оформлении заказа несколько вариантов доставки и выдачи заказов.<br></p>

<!--p><a href="https://shop.ctepx.ru/site/dostavka-zakaza/noindex-o-dostavke-v-vash-gorod/" target="_blank"><br></a></p>

<p><a href="https://shop.ctepx.ru/site/dostavka-zakaza/noindex-o-dostavke-v-vash-gorod/" target="_blank"><br></a></p><a href="https://shop.ctepx.ru/site/dostavka-zakaza/noindex-o-dostavke-v-vash-gorod/" target="_blank"><input type="submit" value="Узнать варианты доставки в мой город" wfd-id="id12">

</a><p><a href="https://shop.ctepx.ru/site/dostavka-zakaza/noindex-o-dostavke-v-vash-gorod/" target="_blank"></a><br></p><p><a href="https://shop.ctepx.ru/site/dostavka-zakaza/noindex-o-dostavke-v-vash-gorod/" target="_blank"></a></p-->

<p> При оформлении заказа, после того, как Вы заполните АДРЕС ДОСТАВКИ в разделе «КОНТАКТНАЯ ИНФОРМАЦИЯ», сервер интернет магазина оставит в разделе «ВАРИАНТЫ ДОСТАВКИ» только доступные способы доставки для указанного населенного пункта.
</p>

<h3>Самовывоз заказа из ближайшего пункта выдачи заказов интернет магазина компании «Стерх»
</h3>

<p>Вы можете забрать товар самостоятельно в одном из офисов компании «Стерх», расположенных в городе Белгород.&nbsp;</p>

<h3>Курьерская доставка по указанному в заказе адресу</h3>

<p> <strong>Курьерская доставка по России осуществляется&nbsp;</strong>транспортными компаниями «DPD», «СДЭК» и «Деловые линии». <br><strong>Курьерская доставка в другие страны (Армения, Беларусь, Казахстан, Киргизия и Украина) осуществляется&nbsp;&nbsp;</strong>транспортной компанией «СДЭК».
</p>

<p>Стоимость курьерской доставки зависит от габаритов и массы заказа (включая массу транспортной упаковки заказа) и места нахождения адресата.<br><em>* В транспортной компании «DPD» стоимость меняется и от выбранного тарифа доставки.</em>
</p>

<p>Расчет стоимости доставки осуществляется в автоматическом режиме на серверах транспортных компаний «DPD», «СДЭК» и «Деловые линии», по тарифам, действующим на момент оформления заказа.
</p>

<p>Отправка заказов  из интернет магазина через транспортные компании осуществляется в течении от 1 до 2 рабочих дней, следующих за днем укомплектования заказа, по следующему графику: Вторник и&nbsp;Четверг;<br>Согласование времени доставки заказа курьером производится сотрудниками транспортных компаний «DPD», «СДЭК» и «Деловые линии» по прибытии Вашего заказа в пункт выдачи.
</p>

<p><strong>Дополнительные возможности</strong><br>
</p>

<ul>
	

<li>отслеживание нахождение отправления с заказом по его трек-номеру;</li>
	

<li>наложенный платеж с 30% предоплатой ( «СДЭК» и ТК «DPD»);</li>

</ul>

<h3>Доставка Почтой России</h3>

<p>Выдача заказов осуществляется через почтовые отделения Почты России. <br>На территории России работает более 42000 отделений Почты России - поэтому этот способ доставки имеет наибольший охват населенных пунктов. <br>Чтобы иметь представление о сроках доставки Вашего заказа через Почту России - смотрите  <a href="https://shop.ctepx.ru/site/dostavka-zakaza/normativnye-sroki-dostavki-otpravleniy-cherez-pochtu-rossii/" target="_blank">Магистральные пояса и нормативные сроки доставки Почтой России для отправлений из Белгорода</a> <br>Расчет стоимости доставки производится по алгоритму сайта Почты России для отправления посылок. <br>Все посылки страхуются на сумму заказа и отправляются с отметкой «Осторожно».<br>Отправка заказов интернет магазина  «Почтой России» осуществляется в течении от 1 до 2 рабочих дней, следующих за днем укомплектования заказа, по следующему графику: <br>Вторник и Четверг;
</p>

<p><strong>Дополнительные возможности</strong>
</p>

<ul>
	

<li>отслеживание нахождение отправления с заказом по его трек-номеру;</li>
	

<li>наложенный платеж с 30% предоплатой;</li>

</ul>

<p><strong>Внимание!</strong> <br>Для доставки «Почта России» существуют ограничения:
</p>

<ul>
	

<li>по размерам отправления: Сумма длины, ширины и высоты не больше 300 см. </li>
	

<li>по массе отправления: предельный вес - 20 кг.</li>

</ul>

<h3>Доставка заказов в пункты выдачи заказов</h3>

<p>Доставка заказов в пункты выдачи по территории России,&nbsp;Армении, Беларуси, Казахстана, Киргизии и Украины осуществляет транспортная компания «СДЭК». Имеющиеся пункты выдачи в Вашем населенном пункте будут выведены в форме раскрывающегося списка. На настольных компьютерах можно просмотреть расположение ПВЗ на карте.</p>

<p>Расчет стоимости доставки осуществляется в автоматическом режиме на сервере компании «СДЭК» по тарифам, действующим на момент оформления заказа.<br></p>

<p><strong>Дополнительные возможности</strong><br>
</p>

<ul>
	

<li>отслеживание нахождение отправления с заказом по его трек-номеру;</li>

<li>наложенный платеж с 30% предоплатой;</li>

</ul>

<h3>Доставка заказов до терминалов и складов транспортных компаний</h3>

<p>Через «DPD» и «Деловые линии» можно осуществить доставку заказов до терминалов и складов этих транспортных компаний. Этот способ доставки мы рекомендуем при заказе тяжелых или крупногабаритных товаров (например длинные карнизы, шлагбаумы или рольставни), но и для обычных товаров этот способ доставки бывает очень выгодным.<br>Стоимость доставки зависит от массы заказа (включая массу транспортной упаковки заказа) и места нахождения адреса доставки. В транспортной компании «DPD» стоимость меняется и от выбранного тарифа доставки. <br>Расчет стоимости доставки осуществляется в автоматическом режиме на серверах транспортных компаний «DPD» и «Деловые линии», по тарифам, действующим на момент оформления заказа.
</p>

<p><strong>Дополнительные возможности</strong><br>
</p>

<ul>
	

<li>отслеживание нахождение отправления с заказом по его трек-номеру;</li>
	

<li>наложенный платеж с 30% предоплатой ( ТК «DPD»);</li>

</ul>

<h3>Доставка заказов до иной транспортной компании, выбранной покупателем</h3>

<p>Если ни один из вышеперечисленных способов доставки Вам не понравился или не подходит для Вашего заказа, то можно заказать доставку через иную транспортную компанию, осуществляющую перевозки в Ваш населенный пункт и имеющую пункты приема грузов в городе Белгороде (например «ПЭК», «Желдорэкспедиция», «КИТ» и т.д.).  В этом случае подбор транспортной компании покупатель осуществляет самостоятельно. <br>Стоимость наших услуг по упаковке, доставке в выбранную клиентом транспортную компанию и оформлению документации на провоз фиксированная - 220 руб. <br><strong>При этом способе доставки стоимость услуг транспортной компании оплачивается покупателем отдельно</strong>, непосредственно в транспортной компании.<span class="redactor-invisible-space"></span>
</p></div>
    </td>
			
			
		
 		<td width="190" cellpadding="5" valign="top" align="center" bgcolor="#ff8000">
<a href="https://shop.ctepx.ru/site/kak-oplatit-zakaz/#rassrochka">
   <img width="150" src="https://shop.ctepx.ru/wa-data/public/shop/products/14/webp/data/public/site/themes/profitshop_2019_12_24/img/ban-4.webp?v1617374536?v1.0.9.22">
      </a>
				<BR><BR>
			<a href="https://shop.ctepx.ru/category/Zhaluzi/">
   <img width="150" src="https://shop.ctepx.ru/wa-data/public/shop/products/10/webp/data/public/site/themes/profitshop_2019_12_24/img/ban-3.webp?v1576838341?v1.0.9.22">
      </a>
      <BR><BR>
			<a href="https://shop.ctepx.ru/category/rulonnye-shtory/">
   <img width="150" src="https://shop.ctepx.ru/wa-data/public/shop/products/10/webp/data/public/site/themes/profitshop_2019_12_24/img/promo-img.webp?v1615276217?v1.0.9.22">
      </a><BR>
      <BR><BR>
			
		</td><!-- -->
	</tr>
<!-- 	<tr>
			<td colspan=3 cellpadding="5" valign="top" align="center" bgcolor="#ff8000">
			баннер1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			баннер2 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			баннер3 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;(баннеры - произвольные картинки со ссылками)
		</td>
	</tr> -->
</table>

  <footer>
    <table border="0" width="900" cellpadding="0" cellspacing="0" align="center" bgcolor="#ff8000">
	<tr>
	<td width="150" align="center"><a href="https://shop.ctepx.ru/">
   <img width="150" src="https://shop.ctepx.ru/wa-data/public/shop/products/10/webp/data/public/site/themes/profitshop_2019_12_24/img/logo-footer.webp?v1580689235?v1.0.9.205">
      </a>
    <p>Работаем с 1991 года</p>
    
      </td>
	<td align="center"><H1>АДРЕС</H1>
	  <a href="https://yandex.ru/maps/4/belgorod/house/ulitsa_makarenko_5a/Z08YcAFmSUcEQFtqfXl5cHtrZQ==/?ll=36.666023%2C50.581781&z=17" target="_self">
   <img width="350" src="/map.PNG">
    </a>
	</td>
	<td width="200">
		<table  cellpadding="5"  width="100%">
			<tr>
        <h3>КОНТАКТЫ</h3>
				<p><a href="tel:+74722569236">+7 (4722) 56-92-36  (Белгород и область)</a><br><br>
      <a class="footer__link2" href="tel:+74951518854">+7 (495) 151-88-54 (Москва и область)</a><br><br>
      <a class="footer__link2" href="tel:88007754854">+7 (800) 775 - 48 - 54 (бесплатно по России)</a></p>
			</tr>
		</table>
	</td>
	</tr>
</table>
  </footer>
</body>
</html>