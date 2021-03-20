<?php 

$login = $_POST['login'];
$password = $_POST['password'];
$userAdmin = 'admin';
$userUser = 'user';

require_once('connect.php');

$userData = mysqli_query($connect, "select * from `users` where `login` = '$login'");
$userArr = mysqli_fetch_assoc($userData);

if ($userAdmin == $userArr['type'] && $login == $userArr['login'] && $password == $userArr['password']){

session_start();
$_SESSION["login"] = $login;
$_SESSION["password"] = $password;
$_SESSION["isAdmin"] = true;

header('Location: ../admin.php');

} elseif ($userUser == $userArr['type'] && $login == $userArr['login'] && $password == $userArr['password']) {
session_start();

    $_SESSION["login"] = $login;
    $_SESSION["password"] = $password;
    $_SESSION["isAdmin"] = false;    
header('Location: ../admin.php');

}


?>


