<?php
include '../config/db.php';

$id = $_GET['id'];
$sql = "SELECT * FROM students WHERE id = ?";
$data = $conn->prepare($sql);
$data->execute([$id]);
$student = $data->fetch();
?>


<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <title>Studentni Tahrirlash</title>
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
    <h2>Student qo‘shish</h2>
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?= $student['id'] ?>">
        <label>Ism (First Name)</label>
        <input type="text" name="first_name" value="<?= $student['first_name'] ?>" placeholder="Ism kiriting" required>

        <label>Familiya (Last Name)</label>
        <input type="text" name="last_name" value="<?= $student['last_name'] ?>" placeholder="Familiya kiriting" required>

        <label>Yosh (Age)</label>
        <input type="number" name="age" value="<?= $student['age'] ?>" placeholder="Yosh kiriting" required>

        <label>Sinf (Class Name)</label>
        <input type="text" name="class_name" value="<?= $student['class_name'] ?>" placeholder="Sinfni kiriting" required>

        <label>Telefon</label>
        <input type="text" name="phone" value="<?= $student['phone'] ?>" placeholder="Telefon nomerni kiriting" required>

        <label>Manzil (Address)</label>
        <textarea name="adress" rows="3" placeholder="Manzil kiriting"><?= $student['adress'] ?></textarea>

        <button type="submit">Tahrirlash</button>

    </form>
</div>

</body>
</html>

