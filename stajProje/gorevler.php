<?php
session_start();
include "config.php";

//if(!isset($_SESSION["ISLOGIN"]) && !($_SESSION["ISLOGIN"]==true)) {
if(!$_SESSION["ISLOGIN"]) {
    header("Location: hataliGiris.php");
}

$mesaj = "Merhaba, Görevlerinize Hoş Geldiniz.";
print $mesaj;

$currentPage= $_SERVER['PHP_SELF'];

if(isset($_POST["formname"])){

    foreach ($_POST["items"] as $item) {
        $item_name = $item['item_name'];
        $item_priority = $item['item_priority'];
        $item_start_date = $item['item_start_date'];
        $item_end_date = $item['item_end_date'];

        echo "<br>Görev Adı: $item_name <br>, Öncelik: $item_priority<br>, Başlangıç Tarihi: $item_start_date <br>, Bitiş Tarihi: $item_end_date<br>";
    }

    var_dump($_POST);
    exit();
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Bootstrap Navbar</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">

    <style>
        body {
            background-color: #917897!important;/* Koyu yeşil rengi */
            color: white; /* Metin rengi */
        }
        .navbar {
            padding-left:10px;
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
        #repeaterForm {
            padding:50px;
        }
        #repeaterForm div{
            /*float:left;*/
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">TO-DO?</a>

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


    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">Ana Sayfa</a>
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
    <div class="d-flex flex-column flex-shrink-0 p-3 text-white col-md-3" style="background-color:#493b4b;width: 280px;">
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
    <div class="d-flex flex-column col-md-9">

        <form id="repeaterForm" class="flex-column" method="post">

            <input type="hidden" name="formname" value="gorevler"/>

            <div data-repeater-list="items">
                <div data-repeater-item class="mb-5">
                    <div class="row">
                        <div class="col-md-3">
                            <input type="text" class="form-control" name="item_name" placeholder="Görevinizi Yazınız.">
                        </div>
                        <div class="col-md-2">
                            <select class="form-select" name="item_priority"  aria-label="Disabled select example" >
                                <option selected disabled>Öncelik</option>
                                <option value="dusuk">Düşük!</option>
                                <option value="orta">Orta!!</option>
                                <option value="yuksek">Yüksek!!!</option>
                            </select>
                        </div>

                        <div class="col-md-2">
                            <input type="text" class="date-picker form-control" name="item_start_date" placeholder="Başlangıç Tarihi">
                        </div>
                        <div class="col-md-2">
                            <input type="text" class="date-picker form-control" name="item_end_date" placeholder="Bitiş Tarihi">
                        </div>
                        <div class="col-md-2">
                            <input class="btn btn-danger" data-repeater-delete type="button" value="Sil">
                        </div>
                    </div>

                </div>
            </div>

            <br>
            <input class="btn btn-success" data-repeater-create type="button" value="Yeni Görev Ekle">
            <input class="btn btn-warning" type="submit" value="Kaydet">
        </form>
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

<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.repeater/1.2.1/jquery.repeater.min.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>


<script>
    $(document).ready(function () {
        $('#repeaterForm').repeater({
            initEmpty: true, // İlk ürünü boş olarak eklemek için
            show: function () {
                $(this).slideDown();
                $(this).find('.date-picker').datepicker({
                    dateFormat: 'dd/mm/yy'
                });
                $(this).find('.priority-button').on('click', function () {
                    $('.priority-options').toggle();
                    $('#slcdt').attr("selected");
                });
            },
            hide: function (deleteElement) {
                if (confirm('Bu görevi silmek istediğinize emin misiniz?')) {
                    $(this).slideUp(deleteElement);
                }
            },
            isFirstItemUndeletable: true
        });
    });
</script>

</body>
</html>

