<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <title>Student Qo‘shish</title>
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
    <form action="store.php" method="POST">

        <label>Ism (First Name)</label>
        <input type="text" name="first_name" placeholder="Ism kiriting" required>

        <label>Familiya (Last Name)</label>
        <input type="text" name="last_name" placeholder="Familiya kiriting" required>

        <label>Yosh (Age)</label>
        <input type="number" name="age" placeholder="Yosh kiriting" required>

        <label>Sinf (Class Name)</label>
        <input type="text" name="class_name" placeholder="Sinifni kiriting" required>

        <label>Telefon</label>
        <input type="tel" name="phone" placeholder="Telefon nomerni kiriting" required>

        <label>Manzil (Address)</label>
        <textarea name="adress" rows="3" placeholder="Manzil kiriting"></textarea>

        <button type="submit">Qo‘shish</button>

    </form>
</div>

</body>
</html>