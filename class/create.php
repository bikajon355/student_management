<?php
include "../config/db.php";

$sql = "SELECT * FROM teachers";
$data = $conn->prepare($sql);
$data->execute();
$teachers = $data->fetchAll();
// var_dump($teachers); exit;

?>
<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <title>Class Qo‘shish</title>
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
    <h2>Class qo‘shish</h2>
    <form action="store.php" method="POST">

       
        <label>Sinf (Class Name)</label>
        <input type="text" name="class_name" placeholder="Sinifni kiriting" required>  

        <label>Teacher_id (Teacher_id)</label>
        <select name="teacher_id" required>
            <option value="">Select Teacher</option>
            <?php foreach($teachers as $item): ?>
                <option value="<?= $item['id'] ?>"><?= $item['firsl_name'] . " ". $item['last_name'] ?></option>
            <?php endforeach; ?>    
            
        </select>
   

        <button type="submit">Qo‘shish</button>

    </form>
</div>

</body>
</html>