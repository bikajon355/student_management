<?php
include '../config/db.php';
$id = $_POST['id'];
$class_name = $_POST['class_name']; 
$teacher_id = $_POST['teacher_id'];

$sql = "UPDATE class SET class_name = ?, teacher_id = ? WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->execute([$class_name, $teacher_id, $id]);
header("Location: index.php");
exit;
?>