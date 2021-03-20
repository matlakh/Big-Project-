<?php 

require_once('connect.php');

$course_title = $_POST['title'];
$course_author = $_POST['author'];
$course_time = $_POST['time'];
$course_rating = $_POST['rating'];
$course_id = $_POST['id'];
$course_about = $_POST['about'];

// $path = 'files/' . time() . $_FILES['img']["name"];
// move_uploaded_file($_FILES['img']['tmp_name'], '../' . $path);

// $course_img = '../' . $path;

mysqli_query($connect, "UPDATE `courses` SET `title` = '$course_title', `author` = '$course_author', `time` = '$course_time', `about` = '$course_about' WHERE `courses`.`id` = '$course_id'");
header('Location: ../admin.php')
?>

