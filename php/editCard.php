<?php 

require_once('connect.php');

$card_title = $_POST['title'];
$card_id = $_POST['id'];
$card_about = $_POST['about'];

// $path = 'files/' . time() . $_FILES['img']["name"];
// move_uploaded_file($_FILES['img']['tmp_name'], '../' . $path);

// $course_img = '../' . $path;

mysqli_query($connect, "UPDATE `cards` SET `title` = '$card_title', `about` = '$card_about' WHERE `cards`.`id` = '$card_id'");
header('Location: ../cards.php')
?>

