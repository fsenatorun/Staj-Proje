<?php
session_start();

if(isset($_SESSION["ISLOGIN"]) && $_SESSION["ISLOGIN"] == true) {
	header("Location: giristenSonrakiEkran.php");	
}

include "config.php";

if (isset($_POST["formname"])) {
	if ($_POST["formname"]=="girisyap"){
    // Kayıt formundan gelen verileri alın

    $email = $_POST["email"];
    $parola = $_POST["password"];

    // Boş alan kontrolü yapın
    if (empty($email) || empty($parola)) {
        // Alanlar boş bırakılamaz, kullanıcıya uyarı verin
        echo "Bu alanlar boş bırakılamaz!";
    } else {
        $kayitbasarili = doAuthentication($email,$parola);
        if ($kayitbasarili) {
            header("Location: giristenSonrakiEkran.php");
        } else {
            header("Location:hataliGiris.php");
        }
    }
	}
}

if (isset($_POST["formname"])) {
	if ($_POST["formname"]=="kayitol"){
    $email = $_POST["email"];
    $parola = $_POST["password"];
	$kullaniciadi = $_POST["kullaniciadi"];
	

    // Boş alan kontrolü yapın
     if (empty($kullaniciadi) || empty($email) || empty($parola)) {
        // Alanlar boş bırakılamaz, kullanıcıya uyarı verin
        echo "Bu alanlar boş bırakılamaz!";
    } else {
        $kontrol = doregistiration($email,$kullaniciadi,$parola);

        if (!$kontrol) {
            header("Location: kayitBasarili.php");
        } else {
            header("Location: hataliGiris.php");
        }
    }
}
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Bootstrap Navbar</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #7bb292; /* Koyu yeşil rengi */
            color: white; /* Metin rengi */
        }

        .navbar-brand-custom {
            color: white !important; /* Beyaz renk */
        }

        .navbar-bg-custom {
            background-color:#0000004f !important; /* Açık krem rengi */
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
    $resimler = 'resimler/resim3.png';
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

<div class="container mt-5">
    <h2>TO-DO?'ya Hoşgeldiniz.</h2>
    <p>Burada günlük görevlerinizi planlayabilir ve önceliklerinizi sıralayabilirsiniz.</p>
	<div class="container text-center">
  <div class="row">
   
    <div class="col" style="margin-top:10px">
	 <span style="font-size: 2.5rem;"> KAYIT OL </span>
	 
	
	<img src="resimler/zz.png" class="" style="width: 120px; height: 100px; position: relative; top: -15px; left: 10px;">

	 
	 
	  <form class="row g-3" method="POST">
	  <input type="hidden" name="formname" value="kayitol"/>
		  <div class="col-md-6">
			<label for="inputEmail4" class="form-label">E-Postanız</label>
			<input type="email" name="email" class="form-control" id="inputEmail4" placeholder="ornek@hotmail.com">
		  </div>
		  <div class="col-md-6">
			<label for="inputPassword4" class="form-label">Şifreniz</label>
			<input type="password" name="password" class="form-control" id="inputPassword4" placeholder="********">
		  </div>
		  <div class="col-12">
			<label for="inputUserName" class="form-label">Kullanıcı Adınız</label>
			<input type="text" name="kullaniciadi" class="form-control" id="inputAddress" placeholder="nickname(:">
		
		  </div>
		  
		  
		  <div class="col-12" style="margin-top:10px !important">
			<button type="submit" class="btn btn-primary">Kayıt Ol</button>
		  </div>
  
	</form>
	
    </div>
	
    <div class="col">
     <span style="font-size: 2.5rem;"> GİRİŞ YAP</span>
	 <img src="resimler/kedi.png" class="" style="width:120px; height:110px;position: relative; top: -15px; left: 10px;">
	 
	  <form method="POST"> 
	  <input type="hidden" name="formname" value="girisyap"/>
		  <div class="mb-3">
			<label for="exampleInputEmail1" class="form-label">E-Postanız</label>
			<input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ornek@gmail.com">
			<div id="emailHelp" class="form-text">E-Postanız kimseyle paylaşılmaz. Detaylı bilgi kullanıcı sözleşmesidir.</div>
		  </div>
		  <div class="mb-3">
			<label for="exampleInputPassword1" class="form-label">Şifreniz</label>
			<input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="**********">
		  </div>
		  <div class="mb-3 form-check">
			<input type="checkbox" class="form-check-input" id="exampleCheck1">
			<label class="form-check-label" for="exampleCheck1">Beni Hatırla</label>
		  </div>
		  <button type="submit" class="btn btn-primary">Giriş Yap</button>
		</form>
    </div>

  </div>



<!-- Bootstrap JS ve jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
