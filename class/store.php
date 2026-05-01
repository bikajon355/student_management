<?php
include '../config/db.php';
$class_name = $_POST['class_name'];
$teacher_id = $_POST['teacher_id'];

//so'rov
$sql = "INSERT INTO class (class_name, teacher_id) VALUES (?, ?)";

//so'rovni tayyorlash
$data = $conn->prepare($sql);

//so'rovni bajarish
$data->execute([$class_name, $teacher_id]);

header('Location: index.php');
?>