<?php
include '../config/db.php';
$id = $_POST['id'];
$firsl_name = $_POST['firsl_name']; 
$last_name = $_POST['last_name'];
$subject = $_POST['subject'];
$exprience = $_POST['exprience'];
$phone = $_POST['phone'];
$adress = $_POST['adress'];

$sql = "UPDATE teachers SET firsl_name = ?, last_name = ?, subject = ?, exprience = ?, phone = ?, adress = ? WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->execute([$firsl_name, $last_name, $subject, $exprience, $phone, $adress, $id]);
header("Location: index.php");
exit;
?>