<!-- 
    // $email = filter_var(trim($_POST['email']), );
    // $password = filter_var(trim($_POST['password']),);
    // $repeat = filter_var(trim($_POST['repeat']),);

    // if(mb_strlen($email) < 5 || mb_strlen($email) > 90) {
    //     echo "Недопустимая длина логина";
    //     exit();
    // } else  if(mb_strlen($password) < 2 || mb_strlen($password) > 8 ) {
    //     echo "Недопустимая длина пароля";
    //     exit();
    // } else  if(mb_strlen($repeat) < 2 || mb_strlen($repeat) > 8 ) {
    //     echo "Недопустимая длина пароля";
    //     exit();
    // }


    // $mysql = new mysqli('localhost', 'root', '', 'microzelen');
    // $mysql->query("INSERT INTO `users` (email, password, repeat) VALUES('$email', '$password', '$repeat')");

    // $mysql->close();

    // header('Location: ../../index.php');

    ?> -->
    <?php
session_start(); 
include("../php-connect/connect.php");


if (isset($_POST['email'])) {
    $email = $_POST['email'];
    if ($email === '') {
        unset($email);
    }
}

if (isset($_POST['password'])) {
    $password = $_POST['password'];
    if ($password === '') {
        unset($password);
    }
}

if (isset($_POST['repeat'])) {
    $repeat = $_POST['repeat'];
    if ($repeat === '') {
        unset($repeat);
    }
}

$email = trim($_POST['email']);
$password = trim($_POST['password']);
$repeat = trim($_POST['repeat']);


$hash = password_hash($password, PASSWORD_DEFAULT);

if ($password !== $repeat) {
    $_SESSION['message'] = "Пароли не совпадают!";
    header("Location: ../index.php");
    exit;
}


$query = "SELECT * FROM users WHERE Email=?";
$stmt = mysqli_prepare($connect, $query);
mysqli_stmt_bind_param($stmt, 's', $email);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if (mysqli_num_rows($result) > 0) {
    // Пользователь с таким email уже существует
    $_SESSION['message'] = "Пользователь с таким email уже существует";
    header("Location: ../index.php");
    exit;
}

// Обработка данных пользователя и сохранение в базу данных
$query = "INSERT INTO `users`(`Email`, `Password`) VALUES (?, ?)";
$stmt = mysqli_prepare($connect, $query);
mysqli_stmt_bind_param($stmt, 'ss', $email, $hash);
$result = mysqli_stmt_execute($stmt);

// Проверка результата выполнения запроса
if ($result) {
    $_SESSION['message'] = "Регистрация успешна!";
} else {
    $_SESSION['message'] = "Ошибка при регистрации.";
}

// Закрытие соединения с базой данных
mysqli_close($connect);
header("Location: ../index.php");
exit;
?>
