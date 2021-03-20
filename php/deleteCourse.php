<?php 

require_once('connect.php');

$course_id = $_GET['id'];

mysqli_query($connect, "DELETE FROM `courses` WHERE `courses`.`id` = $course_id");

header('Location: ../admin.php')


?>