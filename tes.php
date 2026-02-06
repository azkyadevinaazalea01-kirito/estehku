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
    background-image: url('img/bg9.jpg');
    background-size: cover;
}

.header-wrap {
    background-image: linear-gradient('img/bg9.jpg');
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

.testimoni-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 30px;
}

.testi-card {
    background: white;
    padding: 30px;
    border-radius: 22px;
    box-shadow: 0 15px 35px rgba(0,0,0,0.06);
    transition: transform 0.3s;
}

.testi-card:hover {
    transform: translateY(-5px);
}

.stars {
    color: var(--accent);
    font-size: 18px;
    margin-bottom: 12px;
}

.testi-card p {
    font-size: 15px;
    opacity: 0.9;
    margin-bottom: 20px;
}

.user {
    display: flex;
    align-items: center;
    gap: 12px;
}

.user img {
    width: 42px;
    height: 42px;
    border-radius: 50%;
    object-fit: cover;
    background: #ddd;
}

.user strong {
    font-size: 14px;
}

.user span {
    font-size: 12px;
    opacity: 0.7;
}

@media (max-width: 768px) {
    .menu {
        display: none;
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
        <h1>Testimoni Pelanggan</h1>
        <p>
            Pengalaman pelanggan setelah menikmati
            produk Es Tehkuu.
        </p>
    </div>

    <div class="testimoni-grid">

        <div class="testi-card">
            <p>
                Es tehnya segar banget, rasanya konsisten.
                Cocok diminum siang hari, harganya juga terjangkau.
            </p>
            <div class="user">
                <img src="SEFTI.jpeg" alt="">
                <div>
                    <strong>Shefti</strong><br>
                    <span>Pelanggan</span>
                </div>
            </div>
        </div>

        <div class="testi-card">
            <p>
                Pelayanannya ramah, teh lemonnya favorit saya.
                Setiap beli selalu puas.
            </p>
            <div class="user">
                <img src="SRI.jpeg" alt="">
                <div>
                    <strong>Sri</strong><br>
                    <span>Pelanggan</span>
                </div>
            </div>
        </div>

        <div class="testi-card">
            <p>
                Rasanya enak dan segar, semoga ke depan
                bisa nambah varian rasa baru.
            </p>
            <div class="user">
                <img src="user3.png" alt="">
                <div>
                    <strong>Sari</strong><br>
                    <span>Pelanggan</span>
                </div>
            </div>
        </div>
        
        <div class="testi-card">
            <p>
                Es teh jumbo-nya beneran puas.
                Cocok buat yang haus setelah aktivitas.
            </p>
            <div class="user">
                <img src="user4.jpeg" alt="">
                <div>
                    <strong>Mila</strong><br>
                    <span>Pelanggan</span>
                </div>
            </div>
        </div>

    </div>

</main>

</body>
</html>
