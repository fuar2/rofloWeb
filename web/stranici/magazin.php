<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Магазин</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<button id="cart-button" style="position: fixed; top: 880px; right: 670px; border-radius: 50%; width: 50px; height: 50px; background-color: #ff8000; color: white;">
    🛒<span id="cart-count" style="position: absolute; top: -10px; right: -10px; background: red; color: white; border-radius: 50%; padding: 2px 5px; font-size: 12px;">0</span>
</button>
<div id="cart-modal" style="display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 80%; max-width: 500px; background: white; border: 1px solid #ddd; padding: 20px; border-radius: 8px; z-index: 1000;">
    <h2>Корзина</h2>
    <div id="cart-items"></div>
    <div style="margin-top: 20px;">
        <p>Общая стоимость: <span id="total-cost">0</span> руб.</p>
        <p>Скидка: <span id="discount">0</span> руб.</p>
        <p>Итоговая стоимость: <span id="final-cost">0</span> руб.</p>
        <button id="checkout" style="margin-top: 10px;">Оформить заказ</button>
    </div>
    <button onclick="closeCartModal()">Закрыть</button>
</div>
<div id="cart-overlay" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5); z-index: 500;" onclick="closeCartModal()"></div>

<header>
    <table border="0" width="900" cellpadding="0" cellspacing="0" align="center" bgcolor="#ff8000">
        <tr>
            <td width="150" align="center">
                <a href="/index.php">
                    <img src="https://ctepx.ru/wa-data/public/shop/products/10/webp/data/public/site/themes/profitshop_2019_12_24/img/logo.webp?v1710244587?v1.0.9.205">
                </a>
            </td>
            <td align="center">
                <h1 class="coolZagolovok">Салон штор</h1>
            </td>
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
<BR>
<!-- Слайдер фото товаров -->
<div class="slider">
  <div class="slides">
    <div class="slide"><img width="150" src="/image1.png" alt="Товар 1"></div>
    <div class="slide"><img width="150" src="/image2.jpg" alt="Товар 2"></div>
    <div class="slide"><img width="150" src="/image3.jpg" alt="Товар 3"></div>
    <!-- Добавьте остальные изображения здесь -->
  </div>
  <button class="prev" onclick="plusSlides(-1)">&#10094;</button>
  <button class="next" onclick="plusSlides(1)">&#10095;</button>
</div>
<BR>
<button onclick="openDocument()" class="download-button">Открыть инструкцию</button>


		<td>
		<td><H1  align="center">Каталог товаров</H1>



<!-- Вывод товаров -->
<div style="display: flex; flex-wrap: wrap; justify-content: center;">
    <?php if ($products): ?>
        <?php foreach ($products as $product): ?>
            <div class="katalogItem" style="border:1px solid #ff8000; padding:10px; margin:10px; width:200px; border-radius:10px;">
    <h2><?php echo htmlspecialchars($product['name']); ?></h2>
    <p><?php echo htmlspecialchars($product['description']); ?></p>
    <p>Цена: <?php echo htmlspecialchars($product['price']); ?> руб.</p>
    <button onclick="addToCart(<?php echo $product['id']; ?>, '<?php echo addslashes($product['name']); ?>', <?php echo $product['price']; ?>)">Добавить в корзину</button>
</div>

        <?php endforeach; ?>
    <?php else: ?>
        <p>В магазине пока нет товаров.</p>
    <?php endif; ?>
</div>
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
            <td width="150" align="center">
                <a href="https://shop.ctepx.ru/">
                    <img width="150" src="https://shop.ctepx.ru/wa-data/public/shop/products/10/webp/data/public/site/themes/profitshop_2019_12_24/img/logo-footer.webp?v1580689235?v1.0.9.205">
                </a>
                <p>Работаем с 1991 года</p>
            </td>
            <td align="center">
                <h1>АДРЕС</h1>
                <a href="https://yandex.ru/maps/4/belgorod/house/ulitsa_makarenko_5a/Z08YcAFmSUcEQFtqfXl5cHtrZQ==/?ll=36.666023%2C50.581781&z=17" target="_self">
                    <img width="350" src="/map.PNG">
                </a>
            </td>
            <td width="200">
                <h3>КОНТАКТЫ</h3>
                <p><a href="tel:+74722569236">+7 (4722) 56-92-36  (Белгород и область)</a><br><br>
                    <a class="footer__link2" href="tel:+74951518854">+7 (495) 151-88-54 (Москва и область)</a><br><br>
                    <a class="footer__link2" href="tel:88007754854">+7 (800) 775 - 48 - 54 (бесплатно по России)</a>
                </p>
            </td>
        </tr>
    </table>
</footer>
<script src="/stranici/script.js"></script>

</body>
</html>
