<!DOCTYPE html>
<html>
<head>
    <title>Удаление товара</title>
</head>
<body>
    <h2>Удаление товара</h2>
    <?php
        $id = $_GET['id'];
        // Replace with your database connection code
        $connection = mysqli_connect("localhost", "root", "111", "microzelen");
        $query = "DELETE FROM Products WHERE id='$id'";
        if (mysqli_query($connection, $query)) {
            echo "Товар успешно удален.";
        } else {
            echo "Ошибка удаления товара: " . mysqli_error($connection);
        }
    ?>
</body>
</html>
