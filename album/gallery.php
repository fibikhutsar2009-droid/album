<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Album Kita</title>

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Font romantis -->
<link href="https://fonts.googleapis.com/css2?family=Parisienne&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

<style>
    
body {
    font-family: 'Poppins', sans-serif;
    background: linear-gradient(135deg, #ffb6c9, #ffe5ec);
    animation: fadeIn 1.3s ease-in-out;
    position: relative;
    overflow-x: hidden;
}

/* Floating hearts */
.hearts {
    position: fixed;
    left: 0;
    width: 100%;
    height: 100%;
    pointer-events: none;
    z-index: 0;
}
.hearts span {
    position: absolute;
    bottom: -10px;
    animation: floatUp 6s infinite ease-in;
    color: rgba(255,255,255,0.8);
    font-size: 20px;
}

.hearts span:nth-child(1) { left: 10%; animation-delay: 0s; }
.hearts span:nth-child(2) { left: 30%; animation-delay: 1.5s; }
.hearts span:nth-child(3) { left: 50%; animation-delay: 0.5s; }
.hearts span:nth-child(4) { left: 70%; animation-delay: 2.2s; }
.hearts span:nth-child(5) { left: 85%; animation-delay: 1s; }

@keyframes floatUp {
    0% { transform: translateY(0) scale(1); opacity: 1; }
    100% { transform: translateY(-120vh) scale(1.4); opacity: 0; }
}

/* Fade */
@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

/* Title */
h2 {
    font-family: 'Parisienne', cursive;
    font-size: 48px;
    color: #ff4d79;
}

/* Cards */
.card-romance, .card {
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 4px 12px rgba(0,0,0,0.2);
    transition: 0.4s;
}
.card:hover {
    transform: scale(1.06);
}

.card img {
    height: 320px;
    object-fit: cover;
}

.caption {
    font-style: italic;
    color: #444;
}

.tanggal {
    font-size: 14px;
    color: #777;
}

/* Tombol Kembali */
.btn-back {
    position: fixed;
    top: 20px;
    left: 20px;
    background: #ff8eb3;
    padding: 10px 20px;
    border-radius: 30px;
    color: white;
    font-weight: 500;
    font-size: 16px;
    text-decoration: none;
    box-shadow: 0 4px 10px rgba(255, 105, 180, 0.4);
    transition: 0.3s ease;
    z-index: 99;
}

.btn-back:hover {
    background: #ff6fa6;
    transform: scale(1.08) rotate(-2deg);
    box-shadow: 0 6px 14px rgba(255, 105, 180, 0.6);
}
</style>
</head>

<body>
    
<!-- 🌸 Romantic Loading Screen -->
<div id="loadingScreen">
    <div class="loader-box">
        <h2 class="loading-title">Tunggu ya sayang... 💞</h2>
        <div class="heart-loader">❤</div>
    </div>
</div>

<style>
/* Fullscreen Loading */
#loadingScreen {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, #ffdde1, #ee9ca7);
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 9999;
}

/* Box */
.loader-box {
    text-align: center;
    animation: fadeIn 1s ease;
}

/* Title */
.loading-title {
    font-family: 'Great Vibes', cursive;
    font-size: 45px;
    color: #b9375e;
    margin-bottom: 20px;
}

/* Heart Animation */
.heart-loader {
    font-size: 50px;
    animation: heartbeat 1s infinite;
    color: #ff2b70;
}

@keyframes heartbeat {
    0% { transform: scale(1); }
    25% { transform: scale(1.3); }
    50% { transform: scale(1); }
    75% { transform: scale(1.3); }
    100% { transform: scale(1); }
}

@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

#loadingScreen {
    transition: opacity 0.5s ease;
}

</style>

<!-- Musik -->
<audio id="bg-music" autoplay loop style="display:none;">
    <source src="lagu.mp3" type="audio/mpeg">
</audio>

<!-- Tombol Kembali -->
<a href="index.php" class="btn-back">
    ⟵ Kembali Sayang 💗
</a>

<!-- Floating Hearts -->
<div class="hearts">
    <span>❤</span><span>❤</span><span>❤</span><span>❤</span><span>❤</span>
</div>

<div class="container py-5">
    <h2 class="text-center mb-4">Our Memory</h2>

    <div class="row g-4">

        <!-- FOTO 1 -->
        <div class="col-md-4 col-sm-6">
            <div class="card">
                <img src="ft1.jpeg">
                <div class="card-body text-center">
                    <p class="caption">Masi inget moment ini?, pertama kali kita fotbar wkwk💕</p>
                    <p class="tanggal">📅 24 Agustus 2025</p>
                </div>
            </div>
        </div>

        <!-- FOTO 2 -->
        <div class="col-md-4 col-sm-6">
            <div class="card">
                <img src="ft2.jpeg">
                <div class="card-body text-center">
                    <p class="caption">Makrab karantina 💕</p>
                    <p class="tanggal">📅 24 Agustus 2025</p>
                </div>
            </div>
        </div>

        <!-- FOTO 3 -->
        <div class="col-md-4 col-sm-6">
            <div class="card">
                <img src="ft3.jpeg">
                <div class="card-body text-center">
                    <p class="caption">Nah tipis tipis sela kegiatan dusis 💕</p>
                    <p class="tanggal">📅 31 Agustus 2025</p>
                </div>
            </div>
        </div>

        <!-- FOTO 4 -->
        <div class="col-md-4 col-sm-6">
            <div class="card">
                <img src="ft4.jpeg">
                <div class="card-body text-center">
                    <p class="caption">CFD + gacoan + memperjelas hubungan kita 💕</p>
                    <p class="tanggal">📅 21 September 2025</p>
                </div>
            </div>
        </div>

        <!-- FOTO 5 -->
        <div class="col-md-4 col-sm-6">
            <div class="card">
                <img src="ft5.jpeg">
                <div class="card-body text-center">
                    <p class="caption">First date malming 💕</p>
                    <p class="tanggal">📅 4 Oktober 2025</p>
                </div>
            </div>
        </div>

        <!-- FOTO 6 -->
        <div class="col-md-4 col-sm-6">
            <div class="card">
                <img src="ft6.jpeg">
                <div class="card-body text-center">
                    <p class="caption">Habis dari cafe tune lanjut nongkrong diluar wkwk 💕</p>
                    <p class="tanggal">📅 4 Oktober 2025</p>
                </div>
            </div>
        </div>

        <!-- FOTO 7 -->
        <div class="col-md-4 col-sm-6">
            <div class="card">
                <img src="ft7.jpeg">
                <div class="card-body text-center">
                    <p class="caption">Akhirnya Bioskop date, ada sesuatu yg terjadi wkwk 💕</p>
                    <p class="tanggal">📅 21 Oktober 2025</p>
                </div>
            </div>
        </div>

        <!-- FOTO 8 -->
        <div class="col-md-4 col-sm-6">
            <div class="card">
                <img src="ft8.jpeg">
                <div class="card-body text-center">
                    <p class="caption">Seminar dusis + ketemuan sekalian lepas kangen 💕</p>
                    <p class="tanggal">📅 16 November 2025</p>
                </div>
            </div>
        </div>

    </div>
</div>

<footer class="text-center py-4" 
    style="font-family:'Parisienne', cursive; font-size:32px; color:#ff4d79; opacity:0.9;">
    Created for You K ❤️
</footer>

<script>
document.addEventListener("DOMContentLoaded", () => {
    // Loading hilang setelah 1.5 detik
    setTimeout(() => {
        const loading = document.getElementById("loadingScreen");
        loading.style.opacity = "0";

        setTimeout(() => {
            loading.style.display = "none";
        }, 1200);

    }, 3500); 
});
</script>


</body>
</html>
