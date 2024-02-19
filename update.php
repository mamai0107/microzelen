<!DOCTYPE html>
<html>
<head>
    <title>Обновление товара</title>
</head>
<body>
    <h2>Обновление товара</h2>
    <?php
    $connection = mysqli_connect("localhost", "root", "111", "microzelen");
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = mysqli_real_escape_string($connection, $_POST['id']);
        $name = mysqli_real_escape_string($connection, $_POST['name']);
        $desc = mysqli_real_escape_string($connection, $_POST['desc']);
        $price = mysqli_real_escape_string($connection, $_POST['price']);
        $quantity = mysqli_real_escape_string($connection, $_POST['quantity']);
        $img = mysqli_real_escape_string($connection, $_POST['img']);
        $data_added = mysqli_real_escape_string($connection, $_POST['data_added']);
        
        $query = "UPDATE products SET name='$name', `desc`='$desc', price='$price', quantity='$quantity', img='$img', data_added='$data_added' WHERE id='$id'";
        
        if (mysqli_query($connection, $query)) {
            echo "Товар успешно обновлен.";
        } else {
            echo "Ошибка обновления товара: " . mysqli_error($connection);
        }
    }
    mysqli_close($connection);
?>

</body>
</html>
