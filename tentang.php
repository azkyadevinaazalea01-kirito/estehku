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
    background-image: url('img/bg8.jpg');
    background-size: cover;
}

.header-wrap {
    background-image: linear-gradient('img/bg8.jpg');
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
    margin-bottom: 60px;
}

.page-title h1 {
    font-size: 38px;
    color: var(--primary);
}

.page-title p {
    max-width: 600px;
    opacity: 0.85;
}

.card {
    background: white;
    padding: 40px;
    border-radius: 22px;
    margin-bottom: 40px;
    box-shadow: 0 15px 35px rgba(0,0,0,0.06);
}

.card h2 {
    color: var(--primary);
    margin-bottom: 15px;
}

.visi-misi {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 40px;
}

.visi-box {
    background: #f4fbf8;
    padding: 30px;
    border-radius: 18px;
}

.owner {
    display: flex;
    gap: 35px;
    align-items: center;
}

.owner img {
    width: 190px;
    height: 190px;
    object-fit: cover;
    border-radius: 26px;
    border: 4px solid var(--accent);
    background: #ddd;
}

.owner h3 {
    color: var(--primary);
    font-size: 26px;
}
@media (max-width: 768px) {
    .menu {
        display: none;
    }

    .visi-misi {
        grid-template-columns: 1fr;
    }

    .owner {
        flex-direction: column;
        text-align: center;
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
                <span>Segar • manis • enak</span>
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
        <h1>Tentang Kami</h1>
        <p>
            Perjalanan, nilai, dan orang di balik Es Tehkuu.
        </p>
    </div>

    <div class="card">
        <h2>Sejarah Usaha</h2>
        <p>
          adalah merek minuman es teh kekinian yang<br>
          dikelola oleh PT Idaman Anak Bangsa,<br>
          berdiri sejak Agustus 2023 di Yogyakarta</p>
    </div>

    <div class="card visi-misi">
        <div class="visi-box">
            <h2>Visi</h2>
            <p>
               Visi Teh Idaman adalah menjadi produk <br>
               teh (terutama jasmine tea) yang berdaya <br>
               saing tinggi dengan kualitas premium
            </p>
        </div>

        <div class="visi-box">
            <h2>Misi</h2>
            <ul>
                <li>Menyajikan es teh dengan bahan berkualitas dan rasa melati yang khas.</li>
                <li>Terus berinovasi dengan berbagai varian rasa kekinian.</li>
                <li>Memberdayakan petani lokal dan membuka lapangan pekerjaan.</li>
            </ul>
        </div>
    </div>

    <div class="card owner">
        <img src="pemilik.jpg" alt="Pemilik UMKM">
        <div>
            <h3>Agusfian saputra</h3>
            <span>Pemilik</span>
            <p>
                Agusfian menjalankan Es Tehkuu dengan prinsip sederhana:
                rasa yang baik, usaha yang jujur, dan pelayanan yang tulus.
            </p>
        </div>
    </div>

</main>

</body>
</html>
