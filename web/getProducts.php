<?php
// Подключаемся к базе данных
require 'db.php';

try {
    // Выполняем запрос для получения всех продуктов
    $stmt = $pdo->query('SELECT id, name, description, price FROM products');
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Устанавливаем заголовок для вывода данных в формате JSON
    header('Content-Type: application/json');
    echo json_encode($products); // Преобразуем данные в JSON и выводим их

} catch (PDOException $e) {
    echo json_encode(['error' => $e->getMessage()]);
}
?>
