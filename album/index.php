<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Selamat Datang Sayang 💞</title>
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

/* Romantic Title */
.romantic-title {
    font-family: 'Great Vibes', cursive;
    font-size: 60px;
    color: #b9375e;
    margin-bottom: 10px;
    text-shadow: 1px 1px 3px rgba(0,0,0,0.25);
}

/* Romantic Subtitle */
.subtext {
    font-size: 18px;
    color: #6d3b47;
    margin-bottom: 25px;
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
    color: rgba(255, 255, 255, 0.8);
    font-size: 23px;
}

@keyframes floatUp {
    0% { transform: translateY(0) scale(1); opacity: 1; }
    100% { transform: translateY(-120vh) scale(1.3); opacity: 0; }
}

/* Fade Animation */
@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

/* Love Button */
.btn-love {
    background-color: #ff6b9c;
    border-radius: 40px;
    padding: 14px 38px;
    color: white;
    font-size: 19px;
    transition: 0.3s;
    border: none;
}

.btn-love:hover {
    transform: scale(1.07);
    background-color: #ff85af;
}

/* Center Box */
.box {
    background: white;
    border-radius: 25px;
    padding: 40px;
    box-shadow: 0 4px 18px rgba(0,0,0,0.20);
    position: relative;
    z-index: 3;
    animation: fadeIn 1.3s ease;
}

@media (max-width: 480px) {

    .romantic-title {
        font-size: 40px;
    }

    .subtext {
        font-size: 15px;
        margin-bottom: 20px;
    }

    .box {
        padding: 25px;
        width: 90%;
    }

    .btn-love {
        padding: 12px;
        font-size: 17px;
    }

    .btn-back {
        font-size: 15px;
        padding: 8px 18px;
    }
}

</style>
</head>

<body>

<!-- ❤️ Floating Hearts -->
<div class="hearts">
    <span>❤</span><span>❤</span><span>❤</span><span>❤</span><span>❤</span>
</div>

<!-- ❤️ Welcome Box -->
<div class="container text-center" style="margin-top: 18vh;">
    <div class="box col-md-5 mx-auto">
        <h1 class="romantic-title">Hai Sayang 💗</h1>
        <p class="subtext">Semoga Kamu suka yaa   
        terima kasih sudah hadir di hidup aku 💞</p>

        <a href="gallery.php" class="btn-love">Lihat Album Kita</a><br><br>

        <form method="POST" action="login.php">
            <button class="btn btn-outline-dark mt-2">Logout</button>
        </form>
    </div>
</div>

</body>
</html>
