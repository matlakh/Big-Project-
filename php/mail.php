<?php
$name = filter_var($_POST["name"], FILTER_SANITIZE_STRING);
$phone = filter_var($_POST["login"], FILTER_SANITIZE_STRING);
$email = filter_var($_POST["email"], FILTER_SANITIZE_STRING);
$service = filter_var($_POST["password"], FILTER_SANITIZE_STRING);
$errors;

if(empty($name)){
    $errors .= "Enter your name";
} else{
    $user_name = $name;
}
if(empty($login)){
    $login .= "Enter your login";
} else{
    $user_login = $login;
}
if(empty($email)){
    $errors .= "Enter your email";
} else{
    $user_email = $email;
}
if(empty($password)){
    $errors .= "Write your password";
} else{
    $user_password = $password;
}

$to = "";
$mailBody = "New massege!";
$mailBody .= "\n";
$mailBody .= "Name:  " . $user_name ."\n";
$mailBody .= "Login: " . $user_login ."\n";
$mailBody .= "Email: " . $user_email ."\n";

if(mail($to, 'New message!', $mailBody)){
    $output = "OK";
    die($output);
} else{
    $output = $errors;
    die($output);
}
?>