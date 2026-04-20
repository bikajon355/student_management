<?php
include '../config/db.php';
$sql = "SELECT * FROM students";
$data = $conn->prepare($sql);
$data->execute();
$students = $data->fetchAll();
$cnt = 1;
?>
<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <title>Studentlar ro'yxati</title>
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
        <h2>Studentlar ro'yxati</h2>
        <a href="create.php" class="add-btn">+ Student qo'shish</a>
    </div>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Ism</th>
                <th>Familiya</th>
                <th>Yosh</th>
                <th>Sinf</th>
                <th>Telefon</th>
                <th>Manzil</th>
                <th>Amallar</th>
            </tr>
        </thead>
        <tbody>
             <?php  foreach($students as $student): ?>
            <tr>
                <td><?=$cnt++ ?></td>
                <td><?= $student['first_name'] ?></td>
                <td><?= $student['last_name'] ?></td>
                <td><?= $student['age'] ?></td>
                <td><?= $student['class_name'] ?></td>
                <td><?= $student['phone'] ?></td>
                <td><?= $student['adress'] ?></td>
                <td class="actions">
                    <a href="update.php?id=<?=$student['id']?>" class="update">Ko'rish</a>
                    <a href="edit.php?id=<?=$student['id']?>" class="edit">Tahrirlash</a>
                    <a href="delete.php?id=<?=$student['id']?>" class="delete" onclick="return confirm('O\'chirasizmi!')">O'chirish</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

</body>
</html>