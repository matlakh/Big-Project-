<?php 

require_once('connect.php');

$course_title = $_POST['title'];
$course_author = $_POST['author'];
$course_time = $_POST['time'];
$course_rating = $_POST['rating'];

$course_about = $_POST['about'];

$path = '../src/images/icon/' . $_FILES['img']["name"];
move_uploaded_file($_FILES['img']['tmp_name'], '../' . $path);

// $pathForDB = ;

$course_img = 'images/icon/' . $_FILES['img']['name'];

mysqli_query($connect, "INSERT INTO `courses` (`id`, `title`, `author`, `time`, `rating`, `about`, `img`) VALUES (NULL, '$course_title', '$course_author', '$course_time', '$course_rating', '$course_about', '$course_img')");
header('Location: ../admin.php')
?>