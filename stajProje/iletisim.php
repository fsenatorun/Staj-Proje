<!DOCTYPE html>
<html>
<head>
    <title>İletişim</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #406464; /* Koyu yeşil rengi */
            color: white; /* Metin rengi */
        }

        .navbar-brand-custom {
            color: white !important; /* Beyaz renk */
        }

        .navbar-bg-custom {
            background-color: #877294; /* Açık krem rengi */
        }

        .search-text {
            color: #145a32 !important; /* Koyu yeşil rengi */
        }

        .search-text:focus {
            color: #145a32 !important; /* Koyu yeşil rengi */
        }

        .search-text::placeholder {
            color: #000000; /* Koyu yeşil rengi */
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">TO-DO?</a>
    <html>
    <head>
        <title>Küçük Resim Görüntüleme</title>
    </head>
    <body>


    <?php
    // Resim yolunu belirtin
    $resimler = 'resimler/cc.png';
    $resimAlt = 'Logo Resmi';
    $genislik = 50; // Küçültülen genişlik değeri
    $yukseklik = 60; // Küçültülen yükseklik değeri
    ?>

    <!-- Resmi küçültülmüş boyutta görüntülemek için width ve height özelliklerini kullanın -->
    <img src="<?php echo $resimler; ?>" alt="<?php echo $resimAlt; ?>" width="<?php echo $genislik;50 ?>" height="<?php echo $yukseklik;50 ?>">
    </body>
    </html>


    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Ana Sayfa <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="hakkimizda.php">Hakkımızda</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="hizmetlerimiz.php">Burada Ne Yapabilirim?</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="iletisim.php">İletişim</a>
            </li>
        </ul>
    </div>
</nav>

<nav class="navbar navbar-bg-custom">
    <div class="container-fluid">
        <a class="navbar-brand navbar-brand-custom">Ne aramıştınız?</a>
        <form class="d-flex" role="search">
            <input class="form-control me-2 search-text" type="Ara" placeholder="Ara" aria-label="Ara">
            <button class="btn btn-outline-success" type="submit">Ara</button>
        </form>
    </div>
</nav>

<div class="container mt-5">
    <h2>Bizimle İletişime Geçmek İçin:</h2>
    <p>Bu adrese e-posta gönderin: fsenatorun@gmail.com (Henüz buradan nasıl iletişim kurabileceğimizi bilmiyorum...)</p>
    <a href="index.php" style="color: beige"> Ana Sayfaya Dönmek İçin Tıklayınız.</a>
    <img src="resimler/cc.png" alt="Örnek Resim">

    <div class="container text-center">
        <div class="row">