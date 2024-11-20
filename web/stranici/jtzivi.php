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
		<table cellpadding="5" width="100%">
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
      <div class="page page_mb" itemscope="" itemtype="http://schema.org/WebPage"><h1>Отзывы покупателей о нашем интернет магазине </h1>
<div class="wrap"><p> Раздел "Отзывы покупателей об интернет магазине компании 
«Стерх»" работает с декабря 2016 года. <br> С 1 сентября 2017 года покупатели могут не 
только выразить свое мнение о работе нашего интернет-магазина, но и поставить оценку 
(звезды от 1 до 5).<br> С 18 мая 2018 года к отзыву об интернет магазине можно 
прикреплять фотографии.<br>С 20 августа 2023 года в разделе публикуется рейтинг нашей компании на Яндекс-Картах.
  <br>С 4 января 2024 года в разделе публикуется галерея отзывов наших покупателей, опубликованных на сервисе «Яндекс Маркет».</p><hr>
  <h3>Рейтинг нашей компании на Яндекс-Картах</h3>
  <p>Чтобы прочитать отзывы о нашей компании на «Яндекс Картах» или построить маршрут к нам - кликните по бейджику.</p>
 <iframe src="https://yandex.ru/sprav/widget/rating-badge/1017323637?type=rating" width="150" height="50" frameborder="0"></iframe>
<br>
			
			
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