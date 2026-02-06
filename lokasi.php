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
    --soft: #f8f8f8;
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Segoe UI", sans-serif;
}

body {
    background-image: url('img/bg12.jpg');
    background-size: cover;
}

.header-wrap {
    background-image: linear-gradient('img/bg12.jpg');
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

.brand-name h1 {
    font-size: 24px;
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
    text-decoration: none;
    color: white;
    font-weight: 500;
    position: relative;
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

.container {
    max-width: 1100px;
    margin: auto;
    padding: 80px 9%;
}

.page-title {
    margin-bottom: 50px;
}

.page-title h1 {
    font-size: 38px;
    color: var(--primary);
}

.page-title p {
    max-width: 600px;
    opacity: 0.85;
}

.lokasi-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 40px;
}

.card {
    background: white;
    padding: 35px;
    border-radius: 22px;
    box-shadow: 0 15px 35px rgba(0,0,0,0.06);
}

.card h2 {
    color: var(--primary);
    margin-bottom: 15px;
}

.jam ul {
    list-style: none;
    padding-left: 0;
}

.jam li {
    margin-bottom: 10px;
    display: flex;
    justify-content: space-between;
}

.map iframe {
    width: 100%;
    height: 300px;
    border-radius: 18px;
    border: none;
}

@media (max-width: 768px) {
    .menu {
        display: none;
    }

    .lokasi-grid {
        grid-template-columns: 1fr;
    }

    .page-title h1 {
        font-size: 32px;
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
                <span>Segar • Lokal • Jujur</span>
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
</header>

<main class="container">

    <div class="page-title">
        <h1>Lokasi Kami</h1>
        <p>
            Kunjungi dan nikmati kesegaran Es Tehkuu langsung di tempat.
        </p>
    </div>

    <div class="lokasi-grid">

        <div class="card">
            <h2>Alamat</h2>
            <p>
               Jl. Raya Rangkasbitung Pandeglang,<br>
               RT.002/RW.004, Kampung Gunung,<br>
               Kec. Warunggunung, Kabupaten Lebak, Banten 42352
            </p>

            <h2 style="margin-top:30px;">Jam Operasional</h2>
            <div class="jam">
                <ul>
                    <li><span>Senin - minggu</span><span>09.30 - 21.00</span></li>
                </ul>
            </div>
        </div>

        <div class="card map">
            <h2>Peta Lokasi</h2>
            <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.43189429016!2d106.1939647155985!3d-6.338063756584482!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e4217001c700495%3A0xceedc31f491ae4db!2sTeh%20Idaman%20Warung%20Gunung!5e0!3m2!1sid!2sid!4v1768352718961!5m2!1sid!2sid">
            </iframe>
        </div>

    </div>

</main>

</body>
</html>
