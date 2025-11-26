<?php
session_start();
$passBenar = "2109";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Hindari warning array key undefined
    $input = $_POST['password'] ?? "";

    if ($input == $passBenar) {
        $_SESSION['login'] = true;
        header("Location: index.php");
        exit;
    } else {
        $error = "";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Masuk Album Kita</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- 🌸 Romantic CSS -->
<style>
@import url('https://fonts.googleapis.com/css2?family=Great+Vibes&family=Poppins:wght@300;400;500&display=swap');

body {
    background: linear-gradient(135deg, #ffdde1, #ee9ca7);
    animation: fadeIn 1s ease;
    font-family: 'Poppins', sans-serif;
    overflow: hidden;
}

/* Title */
.romantic-title {
    font-family: 'Great Vibes', cursive;
    font-size: 52px;
    color: #b9375e;
    margin-bottom: 10px;
}

/* Floating Hearts */
.hearts {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    pointer-events: none;
    z-index: 1;
}

.hearts span {
    position: absolute;
    bottom: -10px;
    animation: floatUp 6s infinite ease-in;
    color: rgba(255,255,255,0.75);
    font-size: 22px;
}

@keyframes floatUp {
    0% { transform: translateY(0) scale(1); opacity: 1; }
    100% { transform: translateY(-120vh) scale(1.3); opacity: 0; }
}

@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

/* Button Love */
.btn-love {
    background-color: #ff6b9c;
    border-radius: 40px;
    padding: 12px 30px;
    color: white;
    font-size: 18px;
    transition: 0.3s;
    border: none;
}

.btn-love:hover {
    transform: scale(1.07);
    background-color: #ff85af;
}

/* Login Box */
.box {
    background: white;
    padding: 35px;
    border-radius: 25px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.20);
    position: relative;
    z-index: 3;
    animation: fadeIn 1.3s ease;
}
</style>
</head>

<body>

<!-- ❤️ Floating Hearts -->
<div class="hearts">
    <span>❤</span><span>❤</span><span>❤</span><span>❤</span><span>❤</span>
</div>

<!-- ❤️ Form Login -->
<div class="container text-center" style="margin-top: 18vh;">
    <div class="box col-md-4 mx-auto">
        <h1 class="romantic-title">Haiii Sayang 💞</h1>
        <p>Ayo masuk ke album kenangan kita ✨</p>
        <p>pw nya tanggal jadian kita yah!</p>

        <form method="POST">
            <input type="password" name="password" class="form-control mb-3" placeholder="Masukkan Password">
            <button class="btn-love w-100">Lets See</button>
        </form>

        
    </div>
</div>

</body>
</html>
