<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>esteh</title>

<style>
:root {
    --primary: #1f7a5a;
    --accent: #f1c40f;
    --dark: #1e1e1e;
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Segoe UI", sans-serif;
}

body {
    background-image: url('img/bg1.jpg');
    background-size: cover;
}

.header-wrap {
    background: linear-gradient('img/bg1.jpg');
    color: white;
    background-size: cover;
}

.nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 18px 9%;
}

.brand {
    display: flex;
    align-items: center;
    gap: 12px;
}

.brand img {
    width: 52px;
    height: 52px;
    border-radius: 12px;
    background: white;
    padding: 6px;
}

.brand-name {
    line-height: 1.2;
}

.brand-name h1 {
    font-size: 24px;
    letter-spacing: 0.5px;
}

.brand-name span {
    font-size: 12px;
    opacity: 0.9;
}

.menu {
    display: flex;
    gap: 28px;
}

.menu a {
    position: relative;
    text-decoration: none;
    color: white;
    font-weight: 500;
    padding-bottom: 4px;
}

.menu a::after {
    content: "";
    position: absolute;
    left: 0;
    bottom: 0;
    width: 0;
    height: 2px;
    background: var(--accent);
    transition: 0.3s;
}

.menu a:hover::after {
    width: 100%;
}

.hero {
    padding: 80px 9% 90px;
    max-width: 900px;
}

.hero h2 {
    font-size: 44px;
    margin-bottom: 15px;
    line-height: 1.2;
}

.hero p {
    font-size: 18px;
    max-width: 600px;
    opacity: 0.95;
    margin-bottom: 30px;
}

.hero .btn {
    display: inline-block;
    background: var(--accent);
    color: var(--dark);
    padding: 12px 30px;
    border-radius: 30px;
    text-decoration: none;
    font-weight: bold;
    transition: transform 0.2s;
}

.hero .btn:hover {
    transform: translateY(-2px);
}

@media (max-width: 768px) {
    .menu {
        display: none;
    }

    .hero h2 {
        font-size: 34px;
    }
}

</style>
</head>

<body>

<header class="header-wrap">

    <div class="nav">
        <div class="brand">
            <img src="logo.jpg" alt="Logo UMKM">
            <div class="brand-name">
                <h1>Es Tehkuu</h1>
                <span>Segar • Manis • Enak</span>
            </div>
        </div>

        <div class="menu">
            <a href="home.php">Beranda</a>
            <a href="tentang.php">Tentang</a>
            <a href="produk.php">Produk</a>
            <a href="tes.php">Testimoni</a>
            <a href="lokasi.php">Lokasi</a>
            <a href="kontak.php">Kontak</a>
        </div>
    </div>

    <div class="hero" id="home">
        <marquee><h2>Kesegaran Sederhana yang Selalu Dirindukan</h2></marquee>
        <p>
            Diracik dari daun teh pilihan, disajikan dengan rasa yang unik
            untuk menemani hari-harimu.
        </p>
    </div>

</header>

</body>
</html>
