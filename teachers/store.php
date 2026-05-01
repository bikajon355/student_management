<?php
include '../config/db.php';
$firsl_name = $_POST['firsl_name'];
$last_name = $_POST['last_name'];
$exprience = $_POST['exprience'];
$phone = $_POST['phone'];
$adress = $_POST['adress'];
$subject = $_POST['subject'];

//so'rov
$sql = "INSERT INTO teachers (firsl_name, last_name, exprience, phone, adress, subject) VALUES (?, ?, ?, ?, ?, ?)";

//so'rovni tayyorlash
$data = $conn->prepare($sql);

//so'rovни bajarish
$data->execute([$firsl_name, $last_name, $exprience, $phone, $adress, $subject]);

header('Location: index.php');
?>