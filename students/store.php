<?php
include '../config/db.php';
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$age = $_POST['age'];
$class_name = $_POST['class_name'];
$phone = $_POST['phone'];
$adress = $_POST['adress'];

//so'rov
$sql = "INSERT INTO students (first_name, last_name, age, class_name, phone, adress) VALUES (?, ?, ?, ?, ?, ?)";

//so'rovni tayyorlash
$data = $conn->prepare($sql);

//so'rovni bajarish
$data->execute([$first_name, $last_name, $age, $class_name, $phone, $adress]);

header('Location: index.php');
?>