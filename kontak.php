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

.kontak-grid {
    display: grid;
    grid-template-columns: 1.2fr 1fr;
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
    margin-bottom: 18px;
}

.form-group {
    margin-bottom: 18px;
}

.form-group label {
    display: block;
    margin-bottom: 6px;
    font-weight: 500;
}

.form-group input,
.form-group textarea {
    width: 100%;
    padding: 12px 14px;
    border-radius: 12px;
    border: 1px solid #ddd;
    outline: none;
}

.form-group textarea {
    resize: none;
    height: 120px;
}

.form-group input:focus,
.form-group textarea:focus {
    border-color: var(--primary);
}

.btn {
    background: var(--primary);
    color: white;
    border: none;
    padding: 12px 28px;
    border-radius: 14px;
    cursor: pointer;
    font-weight: 600;
    transition: 0.3s;
}

.btn:hover {
    background: #16634a;
}

.info p {
    margin-bottom: 12px;
}

.info span {
    font-weight: 600;
    color: var(--primary);
}

@media (max-width: 768px) {
    .menu {
        display: none;
    }

    .kontak-grid {
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
        <h1>Hubungi Kami</h1>
        <p>
            Punya pertanyaan, kritik, atau ingin kerja sama?
            Silakan hubungi kami.
        </p>
    </div>
        </div>

        <div class="card info">
            <h2>Informasi Kontak</h2>
            <p><span>WhatsApp:</span>0812345678</p>
            <p><span>Email:</span>tehidaman@gmail.com</p>
            <p><span>Instagram:</span>@tehidaman</p>
        </div>

    </div>

</main>

</body>
</html>