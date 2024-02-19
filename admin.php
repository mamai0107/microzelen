<?php
session_start();
include("./php-connect/connect.php");
if (isset($_SESSION['message'])) {
    $message = $_SESSION['message'];

    // Очистка сессионной переменной
    unset($_SESSION['message']);

    // Вывод сообщения только после регистрации
    echo '<div class="message">' . $message . '</div>';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin panel</title>
    <link rel="stylesheet" href="scss/style.css">
    
</head>

<body>
    <?php
    // проверка, является ли пользователь администратором
    if (!isset($_SESSION['Is_admin']) || $_SESSION['Is_admin'] !== true) {
        // Перенаправляем пользователя на главную страницу, если пользователя в сессии нет или он не является администратором
        header("Location: admin.php");
        exit;
    }
    ?>
    <div class="admin-panel">
        <h2>Панель администратора</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Название</th>
                <th>Описание</th>
                <th>Цена</th>
                <th>Количество</th>
                <th>Изображение</th>
                <th>Дата</th>
                <!-- <th>Действия</th> -->
            </tr>
            <?php
                // Replace with your database connection code
                $connection = mysqli_connect("localhost", "root", "111", "microzelen");
                $query = "SELECT * FROM Products";
                $result = mysqli_query($connection, $query);
                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>".$row['id']."</td>";
                    echo "<td>".$row['name']."</td>";
                    echo "<td>".$row['desc']."</td>";
                    echo "<td>".$row['price']."</td>";
                    echo "<td>".$row['quantity']."</td>";
                    echo "<td><img src='".$row['img']."' alt='Изображение' width='100'></td>";
                    echo "<td>".$row['date_added']."</td>";
                    echo "<td><a href='edit_product.php?id=".$row['id']."'>Редактировать</a> | <a href='delete_product.php?id=".$row['id']."'>Удалить</a></td>";
                    echo "</tr>";
                }
                mysqli_close($connection);
            ?>
        </table>
    </div>


</body>

</html>