<?php
session_start();

//if(!isset($_SESSION["ISLOGIN"]) && !($_SESSION["ISLOGIN"]==true)) {
if(!$_SESSION["ISLOGIN"]) {
	header("Location: hataliGiris.php");	
}


$mesaj = "Merhaba, Görevlerinize Hoş Geldiniz. Görevlerinizi Eklemek ve Düzenlemek İçin 'Görevlerim' Bağlantısına Gidiniz.";
print $mesaj;

$currentPage= $_SERVER['PHP_SELF'];

?>


<!DOCTYPE html>
<html>
<head>
    <title>Bootstrap Navbar</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #917897!important;/* Koyu yeşil rengi */
            color: white; /* Metin rengi */
        }

        .navbar-brand-custom {
            color: white !important; /* Beyaz renk */
        }

        .navbar-bg-custom {
            background-color:#cfbcd2!important; /* Açık krem rengi */
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
  <a class="navbar-brand" href="#">TO-DO?</a>   
<html>
<head>
    <title>Küçük Resim Görüntüleme</title>
</head>
<body>

    
    <?php
    // Resim yolunu belirtin
    $resimler = 'resimler/kedi.png';
    $resimAlt = 'Logo Resmi';
    $resimAlt = 'Logo Resmi';
    $genislik = 50; // Küçültülen genişlik değeri
    $yukseklik = 50; // Küçültülen yükseklik değeri
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
        <a class="nav-link" href="#">Ana Sayfa <span class="sr-only">(current)</span></a>
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

<main>

    <div class="d-flex flex-column flex-shrink-0 p-3 text-white" style="background-color:#493b4b;width: 280px;">
    <a class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use/></svg>
        <span class="fs-4"  style="font-size: 24px;">Menü</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">

            <a href="gorevler.php" style="color: #f49dcf;" class="nav-link <?php $currentPage=="/stajProje/giristenSonrakiEkran.php" ? print "" :""?> " aria-current="page" background-color="#0000006b"; >

                <svg class="bi me-2" width="16" height="16" background-color="#0000006b"><use xlink:href="#home"/></svg>
                Görevlerim
            </a>
        </li>
        <li>
            <a href="#" style="color: #f49dcf;" class="nav-link <?php $currentPage=="/stajProje/giristenSonrakiEkran.php" ? print "" :""?>">
                <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"/></svg>
                Rehber
            </a>
        </li>
        <li>
            <a href="#" style="color: #f49dcf;" class="nav-link  <?php $currentPage=="/stajProje/giristenSonrakiEkran.php" ? print "" :""?> ">
                <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"/></svg>
                Yer İşaretleri
            </a>
        </li>
        <li>
            <a href="#" style="color: #f49dcf;" class="nav-link  <?php $currentPage=="/stajProje/giristenSonrakiEkran.php" ? print "" :""?> ">
                <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"/></svg>
               Dosyalar
            </a>
        </li>
        <li>

        </li>
    </ul>
    <hr>
    <div class="dropdown">
        <a href="cikis.php" class="d-flex align-items-center text-white text-decoration-none " id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="resimler/kedi.png" alt="" width="32" height="32" class="rounded-circle me-2">
            <strong>Çıkış Yap?</strong>
        </a>

    </div>
</div>
</main>

<style>
    main {
        display: flex;
        flex-wrap: nowrap;
        height: 80vh;
        height: -webkit-fill-available;
        max-height: 80vh;
        overflow-x: auto;
        overflow-y: hidden;
    }

    .b-example-divider {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .bi {
        vertical-align: -.125em;
        pointer-events: none;
        fill: currentColor;
    }

    .dropdown-toggle { outline: 0; }

    .nav-flush .nav-link {
        border-radius: 0;
    }

    .btn-toggle {
        display: inline-flex;
        align-items: center;
        padding: .25rem .5rem;
        font-weight: 600;
        color: rgba(0, 0, 0, .65);
        background-color: transparent;
        border: 0;
    }
    .btn-toggle:hover,
    .btn-toggle:focus {
        color: rgba(0, 0, 0, .85);
        background-color: #d2f4ea;
    }

    .btn-toggle::before {
        width: 1.25em;
        line-height: 0;
        content: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='rgba%280,0,0,.5%29' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M5 14l6-6-6-6'/%3e%3c/svg%3e");
        transition: transform .35s ease;
        transform-origin: .5em 50%;
    }

    .btn-toggle[aria-expanded="true"] {
        color: rgba(0, 0, 0, .85);
    }
    .btn-toggle[aria-expanded="true"]::before {
        transform: rotate(90deg);
    }

    .btn-toggle-nav a {
        display: inline-flex;
        padding: .1875rem .5rem;
        margin-top: .125rem;
        margin-left: 1.25rem;
        text-decoration: none;
    }
    .btn-toggle-nav a:hover,
    .btn-toggle-nav a:focus {
        background-color: #d2f4ea;
    }

    .scrollarea {
        overflow-y: auto;
    }

    .fw-semibold { font-weight: 600; }
    .lh-tight { line-height: 1.25; }
</style>
</body>
</html>
