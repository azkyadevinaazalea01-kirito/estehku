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
    background-image: url('img/bg7.jpg');
    background-size: cover;
}

.header-wrap {
    background-image: linear-gradient('img/bg7.jpg');
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
    max-width: 1200px;
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

.product-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
    gap: 30px;
}

.product-card {
    background: white;
    border-radius: 22px;
    overflow: hidden;
    box-shadow: 0 15px 35px rgba(0,0,0,0.06);
    transition: transform 0.3s;
}

.product-card:hover {
    transform: translateY(-6px);
}

.product-card img {
    width: 100%;
    height: 190px;
    object-fit: cover;
    background: #ddd;
}

.product-content {
    padding: 25px;
}

.product-content h3 {
    color: var(--primary);
    margin-bottom: 8px;
    font-size: 20px;
}

.product-content p {
    font-size: 14px;
    opacity: 0.85;
    margin-bottom: 15px;
}

.price {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.price span {
    font-weight: bold;
    font-size: 18px;
    color: var(--primary);
}

.price a {
    background: var(--accent);
    color: var(--dark);
    padding: 6px 16px;
    border-radius: 20px;
    text-decoration: none;
    font-size: 14px;
    font-weight: 600;
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
        <h1>Produk Kami</h1>
        <p>
            Pilihan minuman teh segar yang diracik dari bahan berkualitas
            dengan rasa yang konsisten.
        </p>
    </div>

    <div class="product-grid">

        <div class="product-card">
            <img src="original.jpg" alt="Es Teh Original">
            <div class="product-content">
                <h3>Es Teh Original</h3>
                <div class="price">
                    <span>Rp 2.500</span>
                </div>
            </div>
        </div>

        <div class="product-card">
            <img src="manis.jpg" alt="Es Teh Manis">
            <div class="product-content">
                <h3>Es Teh Manis</h3>
                <div class="price">
                    <span>Rp 2.500</span>
                </div>
            </div>
        </div>

        <div class="product-card">
            <img src="lemon.jpg" alt="Es Teh Lemon">
            <div class="product-content">
                <h3>Es Teh Lemon</h3>
                <div class="price">
                    <span>Rp 2.500</span>
                </div>
            </div>
        </div>

        <div class="product-card">
            <img src="jumbo.jpg" alt="Es Teh Jumbo">
            <div class="product-content">
                <h3>Es Teh Jumbo</h3>
                <div class="price">
                    <span>Rp 3.000</span>
                </div>
            </div>
        </div>

<div class="product-card">
            <img src="tea.jpg" alt="Thai Tea">
            <div class="product-content">
                <h3>Thai tea</h3>
                <div class="price">
                    <span>Rp 5.000</span>
                </div>
            </div>
        </div>

        <div class="product-card">
            <img src="milk.jpg" alt="Milk Tea">
            <div class="product-content">
                <h3>Milk Tea</h3>
                <div class="price">
                    <span>Rp 5.000</span>
                </div>
            </div>
        </div>

    </div>

</main>

</body>
</html>
