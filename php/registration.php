<?php 

require_once('connect.php');

$user_login = $_POST['login'];
$user_email = $_POST['email'];
$user_name = $_POST['name'];
$user_password = $_POST['password'];


mysqli_query($connect, "INSERT INTO `users` (`id`, `login`,`name`, `email`, `password`, `type`) VALUES (NULL, '$user_login','$user_name', '$user_email', '$user_password', 'user')");

session_start();

    $_SESSION["login"] = $user_login;
    $_SESSION["password"] = $user_password;
    $_SESSION["isAdmin"] = false;   

header('Location: ../admin.php')
?>