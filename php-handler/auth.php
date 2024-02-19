

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


$email = trim($_POST['email']);
$password = trim($_POST['password']);

$query = "SELECT * FROM users WHERE Email='$email'";
$result = mysqli_query($connect, $query);


    
        if (mysqli_num_rows($result) > 0) {

            $users = mysqli_fetch_assoc($result);

            if (password_verify($password, $users['Password'])) {
                
                if ($users['Is_admin'] == 0) {

                    $_SESSION['Is_admin'] = false; 
                    $_SESSION['id_users'] = $users['ID_users']; 
                    
                    header("Location: ../admin.php");
                    exit();
                } elseif ($users['Is_admin'] == 1) {
                    $_SESSION['Is_admin'] = true; 
                    $_SESSION['id_users'] = $users['ID_users']; 
                    
                    header("Location: ../admin.php");
                    exit();
                }
            } else {
                
                $_SESSION['message'] = "верный логин или пароль";
                header("Location: ../admin.php");
            }
        } else {
           
            $_SESSION['message'] = "Пользователь не найден";
            header("Location: ../index.php");
        }
    


mysqli_close($connect);
?>