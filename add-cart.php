<?php
// Шаг 1: Подключение к базе данных microzelen
$host = 'localhost';
$dbname = 'microzelen';
$username = 'root';
$password = '111';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Ошибка подключения: " . $e->getMessage();
}

// Шаг 2: Получение информации о товаре
$product_id = $_POST['product_id']; // предположим, что этот идентификатор приходит из формы или URL
$stmt = $conn->prepare("SELECT * FROM product WHERE id_product = :product_id");
$stmt->bindParam(':product_id', $product_id);
$stmt->execute();
$product = $stmt->fetch();

// Предположим, что данные о товаре получены в переменной $product, например:
// $product_id = $product['id_product'];
// $product_name = $product['product_name'];
// $product_price = $product['price'];

// Шаг 3: Добавление товара в корзину пользователя
$user_id = 1; // предположим, что это id пользователя, который добавляет товар в корзину
$quantity = 1; // предположим, что это количество товара
$stmt = $conn->prepare("INSERT INTO cart (user_id, product_id, quantity) VALUES (:user_id, :product_id, :quantity)");
$stmt->bindParam(':user_id', $user_id);
$stmt->bindParam(':product_id', $product_id);
$stmt->bindParam(':quantity', $quantity);
$stmt->execute();

echo "Товар успешно добавлен в корзину пользователя с ID $user_id";
?>
