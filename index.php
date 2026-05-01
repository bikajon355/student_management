<!DOCTYPE html>
<html lang="uz">
<head>
<meta charset="UTF-8">
<title>School System</title>

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

/* NAVBAR */
.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: #222;
    padding: 15px 40px;
    position: fixed;
    width: 100%;
    top: 0;
}

.logo {
    color: white;
}

/* MENU */
.menu {
    list-style: none;
    display: flex;
}

.menu-item {
    margin: 0 10px;
    padding: 10px 15px;
    background: #444;
    border-radius: 6px;
}

.menu-item a {
    color: white;
    text-decoration: none;
}

/* HOVER */
.menu-item:hover {
    background: #f39c12;
}

/* SECTION */
.section {
    height: 100vh;
    padding-top: 80px;
    text-align: center;
}

/* HAR BIR SAHIFA */
#home { background: #3498db; color: white; }
#students { background: #2ecc71; color: white; }
#teachers { background: #9b59b6; color: white; }
#class { background: #e67e22; color: white; }

h1 {
    margin-top: 50px;
    font-size: 40px;
}
</style>

</head>
<body>

<!-- NAVBAR -->
<nav class="navbar">
    <h2 class="logo">My School</h2>

    <ul class="menu">
        <li class="menu-item"><a href="#home">Home</a></li>
        <li class="menu-item"><a href="students/index.php">Students</a></li>
        <li class="menu-item"><a href="teachers/index.php">Teachers</a></li>
        <li class="menu-item"><a href="class/index.php">Class</a></li>
    </ul>
</nav>

<!-- HOME -->Asosiy sahifa
<section id="home" class="section">
    <h1>Asosiy sahifa</h1>
    <p>Xush kelibsiz!</p>
</section>

<!-- STUDENTS -->
<section id="students" class="section">
    <h1>Students sahifasi</h1>
    <p>Bu yerda studentlar bo‘ladi</p>
</section>

<!-- TEACHERS -->
<section id="teachers" class="section">
    <h1>Teachers sahifasi</h1>
    <p>Bu yerda o‘qituvchilar bo‘ladi</p>
</section>

<!-- CLASS -->
<section id="class" class="section">
    <h1>Class sahifasi</h1>
    <p>Bu yerda sinflar bo‘ladi</p>
</section>

</body>
</html>