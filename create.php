<?php
    require_once './php-connect/connect.php';

    $id = $_POST['id'];
$name = $_POST['name'];
$desc = $_POST['desc'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];
$img = $_POST['img'];
$date_added = $_POST['date_added'];

mysqli_query($connect, query:"INSERT INTO `products`(`id`, `name`, `desc`, `price`, `quantity`, `img`, `date_added`) VALUES (`$id`, `$name`, `$desc`, `$price`, `$quantity`, `$img`, `$date_added`)");


header("location: admin.php");
?>