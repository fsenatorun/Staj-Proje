<?php
session_start();

//if(!isset($_SESSION["ISLOGIN"]) && !($_SESSION["ISLOGIN"]==true)) {
if(!$_SESSION["ISLOGIN"]) {
	header("Location: hataliGiris.php");	
}


$mesaj = "Merhaba, Görevlerinize Hoş Geldiniz.";
print $mesaj;

?>

<a href="cikis.php"> Çıkış Yap</a>
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar Örneği</title>
    <style>
        /* Temel stil tanımlamaları */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .sidebar {
            position: fixed;
            left: -250px; /* Yan barı sayfanın solunda başlangıçta gizli */
            top: 0;
            width: 250px;
            height: 100%;
            background-color: #333;
            color: #fff;
            transition: left 0.3s ease;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
        }

        .sidebar ul li {
            padding: 10px;
        }

        .sidebar a {
            text-decoration: none;
            color: #fff;
        }

        .content {
            margin-left: 0; /* İçerik, yan bar gizliyken tam ekran genişliğinde olacak */
            transition: margin-left 0.3s ease;
        }

        /* Yan bar açıkken stil tanımlamaları */
        .sidebar.active {
            left: 0;
        }

        .content.active {
            margin-left: 250px;
        }
    </style>
</head>
<body>
<div class="sidebar">
    <button id="sidebar-toggle">☰</button> <!-- Yan barı açma/kapatma düğmesi -->
    <ul>
        <li><a href="#">Menü Öğesi 1</a></li>
        <li><a href="#">Menü Öğesi 2</a></li>
        <li><a href="#">Menü Öğesi 3</a></li>
        <!-- Diğer menü öğeleri buraya eklenir -->
    </ul>
</div>
<div class="content">
    <!-- Sayfa içeriği burada gelecek -->
    <h1>Hoş Geldiniz!</h1>
    <p>Bu içerik sayfanın ana içeriğidir.</p>
</div>
<script>
    // Yan barı açma/kapatma düğmesi işlevi
    document.getElementById('sidebar-toggle').addEventListener('click', function () {
        document.querySelector('.sidebar').classList.toggle('active');
        document.querySelector('.content').classList.toggle('active');
    });
</script>
</body>
</html>
