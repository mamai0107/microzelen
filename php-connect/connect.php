<?php
    $connect = mysqli_connect('localhost', 'root', '111', 'microzelen');
    mysqli_set_charset($connect, 'utf8');
    setlocale(LC_ALL, "UTF-8");

    if (!$connect) {
        printf("Невозможно подключиться к БД. Код ошибки: %s\n", mysqli_connect_error());
        exit;
    }
?>