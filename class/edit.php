<?php
include '../config/db.php';

$id = $_GET['id'];
$sql = "SELECT * FROM class WHERE id = ?";
$data = $conn->prepare($sql);
$data->execute([$id]);
$class = $data->fetch();
?>


<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <title>Class ni Tahrirlash</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #4facfe, #00f2fe);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .form-container {
            background: white;
            padding: 25px 30px;
            border-radius: 10px;
            width: 350px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            margin-top: 10px;
            display: block;
        }

        input, select, textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
            outline: none;
        }

        input:focus, textarea:focus {
            border-color: #4facfe;
        }

        button {
            width: 100%;
            margin-top: 15px;
            padding: 10px;
            border: none;
            background: #4facfe;
            color: white;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background: #007bff;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Class tahrirlash</h2>
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?= $class['id'] ?>">
        
        <label>Class nomi (Class Name)</label>
        <input type="text" name="class_name" value="<?= $class['class_name'] ?>" placeholder="Class nomini kiriting" required>

        <label>Teacher_id (Teacher_id)</label>
        <input type="text" name="teacher_id" value="<?= $class['teacher_id'] ?>" placeholder="Teacher_id" required>

        <button type="submit">Tahrirlash</button>

    </form>
</div>

</body>
</html>

