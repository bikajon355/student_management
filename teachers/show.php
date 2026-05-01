<?php
include '../config/db.php';

$id = $_GET['id'];
$sql = "SELECT * FROM teachers WHERE id = ?";
$data = $conn->prepare($sql);
$data->execute([$id]);
$teachers = $data->fetch();
?>



<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <title>Teacher ma'lumotlari</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: auto;
            background: #fff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .info {
            margin-bottom: 15px;
        }

        .label {
            font-weight: bold;
            color: #555;
        }

        .value {
            margin-top: 5px;
            padding: 8px;
            background: #f1f1f1;
            border-radius: 5px;
        }

        .buttons {
            margin-top: 20px;
            text-align: center;
        }

        .btn {
            padding: 10px 15px;
            margin: 5px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            color: white;
        }

        .back {
            background: #6c757d;
        }

        .edit {
            background: #ffc107;
            color: black;
        }

        .delete {
            background: red;
        }

        .btn:hover {
            opacity: 0.8;
        }
    </style>
</head>
<body>
<div class="container">
<h2>Teacher ma'lumotlari</h2>
<p><strong>Ism:</strong> <?= $teachers['firsl_name']; ?></p>
<p><strong>Familiya:</strong> <?= $teachers['last_name']; ?></p>
<p><strong>Tajriba yili:</strong> <?= $teachers['exprience']; ?></p>
<p><strong>Telefon:</strong> <?= $teachers['phone']; ?></p>
<p><strong>Manzil:</strong> <?= $teachers['adress']; ?></p>
</div>

</body>
</html>