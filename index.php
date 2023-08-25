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
  <a class="navbar-brand" href="#">TO-DO?</a>
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
        <a class="nav-link" href="hizmetlerimiz.php">Hizmetlerimiz</a>
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
   
    <div class="col">
	 <span style="font-size: 2.5rem;"> KAYIT OL </span>
	  <form class="row g-3">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">E-Postanız</label>
    <input type="email" class="form-control" id="inputEmail4" placeholder="ornek@hotmail.com">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Şifreniz</label>
    <input type="password" class="form-control" id="inputPassword4" placeholder="********">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Adresiniz</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="İstiklal Sokak...">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">İkincil Adresiniz</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Mustafa Kemal Caddesi...">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">Ülke</label>
    <input type="text" class="form-control" id="inputCity" placeholder="Türkiye">
	<div class="form-check">  <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Beni hatırla
    
  </div>
  <div class="col-md-4">
  
     
  </div>
  <div class="col-md-2">
   
  </div>
  <div class="col-12">
    
      </label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Kayıt Ol</button>
  </div>
</form>
    </div>
	
    <div class="col">
     <span style="font-size: 2.5rem;"> GİRİŞ YAP</span>
	  <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">E-Postanız</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ornek@gmail.com">
    <div id="emailHelp" class="form-text">E-Postanız kimseyle paylaşılmaz. Detaylı bilgi kullanıcı sözleşmesidir.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Şifreniz</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="**********">
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
