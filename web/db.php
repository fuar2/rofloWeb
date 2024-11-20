<?php
$dsn = 'sqlite:' . __DIR__ . '/my_website.db'; // Путь к базе данных SQLite
try {
    $pdo = new PDO($dsn);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $e) {
    echo "Ошибка подключения к базе данных: " . $e->getMessage();
    exit();
}
?>
