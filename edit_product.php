<!DOCTYPE html>
<html>
<head>
    <title>Редактирование товара</title>
</head>
<body>
    <h2>Редактирование товара</h2>
    <?php
        $id = $_GET['id'];
        // Replace with your database connection code
        $connection = mysqli_connect("localhost", "root", "111", "microzelen");
        $query = "SELECT * FROM Products WHERE id='$id'";
        $result = mysqli_query($connection, $query);
        $row = mysqli_fetch_array($result);
        ?>
        <form method="post" action="update_product.php">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            Название: <input type="text" name="name" value="<?php echo $row['name']; ?>"><br>
            Описание: <input type="text" name="desc" value="<?php echo $row['desc']; ?>"><br>
            Цена: <input type="text" name="price" value="<?php echo $row['price']; ?>"><br>
            Количество: <input type="text" name="quantity" value="<?php echo $row['quantity']; ?>"><br>
            Изображение: <input type="text" name="img" value="<?php echo $row['img']; ?>"><br>
            Дата: <input type="text" name="date_added" value="<?php echo $row['date_added']; ?>"><br>
            <a href="update.php?id=<?php echo $row['id']; ?>" class="button-link">Сохранить</a>

        </form>
    <?php
        mysqli_close($connection);
    ?>
</body>
</html>
