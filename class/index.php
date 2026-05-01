<?php
include '../config/db.php';
$sql = "SELECT * FROM class";
$data = $conn->prepare($sql);
$data->execute();
$class = $data->fetchAll();
$cnt = 1;
?>
<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <title>Class ro'yxati</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 1000px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        h2 {
            margin-bottom: 15px;
        }

        .top-bar {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
        }

        .add-btn {
            padding: 10px 15px;
            background: green;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .add-btn:hover {
            background: darkgreen;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table thead {
            background: #007bff;
            color: white;
        }

        table th, table td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: center;
        }

        table tbody tr:hover {
            background: #f1f1f1;
        }

        .action-btn {
            padding: 5px 10px;
            margin: 2px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            color: white;
        }

        .view {
            background: #17a2b8;
        }

        .edit {
            background: #ffc107;
            color: black;
        }

        .delete {
            background: red;
        }

        .action-btn:hover {
            opacity: 0.8;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="top-bar">
        <h2>Class jadvali</h2>
        <a href="create.php" class="add-btn">+ Class qo'shish</a>
    </div>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Class nomi</th>
                <th>O'qituvchi id</th>
                <th>Amallar</th>
            </tr>
        </thead>
        <tbody>
             <?php  foreach($class as $class): ?>
            <tr>
                <td><?=$cnt++ ?></td>
                <td><?= $class['class_name'] ?></td>
                <td><?= $class['teacher_id'] ?></td>
                <td class="actions">
                    <a href="show.php?id=<?=$class['id']?>" class="view">Ko'rish</a>
                    <a href="edit.php?id=<?=$class['id']?>" class="edit">Tahrirlash</a>
                    <a href="delete.php?id=<?=$class['id']?>" class="delete" onclick="return confirm('O\'chirasizmi!')">O'chirish</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

</body>
</html>