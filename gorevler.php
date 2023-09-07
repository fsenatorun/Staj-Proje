 <?php//bu asıl belge değil burası giristen sonraki ekrana giristen sonraki ekran buraya aktarılacak
 ?>



<?php /*




<body id="body-pd">
    <header class="header" id="header" >
	
	<div style="color: white;">
    <?php
    $mesaj = "Merhaba, Görevlerinize Hoş Geldiniz."; 
    print $mesaj;
    ?>
</div>

        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
		<?php
    // Resim yolunu belirtin
    $resimler = 'resimler/akbbaa.png';
    $resimAlt = 'Logo Resmi';
    $genislik = 50; // Küçültülen genişlik değeri
    $yukseklik = 50; // Küçültülen yükseklik değeri
    ?>
        <div class="header_img"> <img src="<?php echo $resimler; ?>" alt="<?php echo $resimAlt; ?>" width="<?php echo $genislik;50 ?>" height="<?php echo $yukseklik;50 ?>" alt=""> </div>
    </header>
    <div class="5-navbar" id="nav-bar">
        <nav class="nav">
            <div> <a href="hakkimizda.php" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">TO-DO?</span> </a>
                <div class="nav_list"> <a href="gorevler.php" class="nav_link active"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Görevlerim</span>
				<ul class="list-group">
  <li class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
    <input type="text" name="gorev" id= "gorev" placeholder="Görevi buraya yazın">
	
  </li>
  <li class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
	 <input type="text" name="gorev" id= "gorev" placeholder="Görevi buraya yazın">
    
  </li>
  <li class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
	 <input type="text" name="gorev" id= "gorev" placeholder="Görevi buraya yazın">
 
  </li>
  <li class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
	 <input type="text" name="gorev" id= "gorev" placeholder="Görevi buraya yazın">
   
  </li>
  <li class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
	 <input type="text" name="gorev" id= "gorev" placeholder="Görevi buraya yazın">

  </li>
</ul></a> 
				<a href="#" class="nav_link"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">Rehber</span> </a>
				<a href="#" class="nav_link"> <i class='bx bx-message-square-detail nav_icon'></i> <span class="nav_name">Mesajlar</span> </a>
				<a href="#" class="nav_link"> <i class='bx bx-bookmark nav_icon'></i> <span class="nav_name">Yer İşaretleri</span> </a>
				<a href="#" class="nav_link"> <i class='bx bx-folder nav_icon'></i> <span class="nav_name">Dosyalar</span> </a>
				
				
				</div>
           
		   </div> <a href="cikis.php" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">Çıkış Yap</span> </a>
        </nav>
    </div>
   
	
	<style>
	
	
	@import url("https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap");:root{--header-height: 3rem;--nav-width: 68px;--first-color: #4723D9;--first-color-light: #AFA5D9;--white-color: #1f1350;--body-font: 'Nunito', sans-serif;--normal-font-size: 1rem;--z-fixed: 100}*,::before,::after{box-sizing: border-box}body{position: relative;margin: var(--header-height) 0 0 0;padding: 0 1rem;font-family: var(--body-font);font-size: var(--normal-font-size);transition: .5s}a{text-decoration: none}.header{width: 100%;height: var(--header-height);position: fixed;top: 0;left: 0;display: flex;align-items: center;justify-content: space-between;padding: 0 1rem;background-color: var(--white-color);z-index: var(--z-fixed);transition: .5s}.header_toggle{color: var(--first-color);font-size: 1.5rem;cursor: pointer}.header_img{width: 35px;height: 35px;display: flex;justify-content: center;border-radius: 50%;overflow: hidden}.header_img img{width: 40px}.l-navbar{position: fixed;top: 0;left: -30%;width: var(--nav-width);height: 100vh;background-color: var(--first-color);padding: .5rem 1rem 0 0;transition: .5s;z-index: var(--z-fixed)}.nav{height: 100%;display: flex;flex-direction: column;justify-content: space-between;overflow: hidden}.nav_logo, .nav_link{display: grid;grid-template-columns: max-content max-content;align-items: center;column-gap: 1rem;padding: .5rem 0 .5rem 1.5rem}.nav_logo{margin-bottom: 2rem}.nav_logo-icon{font-size: 1.25rem;color: var(--white-color)}.nav_logo-name{color: var(--white-color);font-weight: 700}.nav_link{position: relative;color: var(--first-color-light);margin-bottom: 1.5rem;transition: .3s}.nav_link:hover{color: var(--white-color)}.nav_icon{font-size: 1.25rem}.show{left: 0}.body-pd{padding-left: calc(var(--nav-width) + 1rem)}.active{color: var(--white-color)}.active::before{content: '';position: absolute;left: 0;width: 2px;height: 32px;background-color: var(--white-color)}.height-100{height:100vh}@media screen and (min-width: 768px){body{margin: calc(var(--header-height) + 1rem) 0 0 0;padding-left: calc(var(--nav-width) + 2rem)}.header{height: calc(var(--header-height) + 1rem);padding: 0 2rem 0 calc(var(--nav-width) + 2rem)}.header_img{width: 40px;height: 40px}.header_img img{width: 45px}.l-navbar{left: 0;padding: 1rem 1rem 0 0}.show{width: calc(var(--nav-width) + 156px)}.body-pd{padding-left: calc(var(--nav-width) + 188px)}}
	
	</style>
	
	
	
	<script>
	document.addEventListener("DOMContentLoaded", function(event) {
   
const showNavbar = (toggleId, navId, bodyId, headerId) =>{
const toggle = document.getElementById(toggleId),
nav = document.getElementById(navId),
bodypd = document.getElementById(bodyId),
headerpd = document.getElementById(headerId)

// Validate that all variables exist
if(toggle && nav && bodypd && headerpd){
toggle.addEventListener('click', ()=>{
// show navbar
nav.classList.toggle('show')
// change icon
toggle.classList.toggle('bx-x')
// add padding to body
bodypd.classList.toggle('body-pd')
// add padding to header
headerpd.classList.toggle('body-pd')
})
}
}

showNavbar('header-toggle','nav-bar','body-pd','header')

/*===== LINK ACTIVE =====*/
/*const linkColor = document.querySelectorAll('.nav_link')

function colorLink(){
if(linkColor){
linkColor.forEach(l=> l.classList.remove('active'))
this.classList.add('active')
}
}
linkColor.forEach(l=> l.addEventListener('click', colorLink))

 // Your code to run since DOM is loaded and ready
});
</script>
*/
?>

<html>
<head>
<title>GÖREVLER</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.repeater/1.2.1/jquery.repeater.min.css">

</head>
<body id="body-pd">
    <header class="header" id="header" >
	
	<div style="color: white;">
    <?php
    $mesaj = "Merhaba, Görevlerinize Hoş Geldiniz."; 
    print $mesaj;
    ?>
</div>

        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
		<?php
    // Resim yolunu belirtin
    $resimler = 'resimler/akbbaa.png';
    $resimAlt = 'Logo Resmi';
    $genislik = 50; // Küçültülen genişlik değeri
    $yukseklik = 50; // Küçültülen yükseklik değeri
    ?>
        <div class="header_img"> <img src="<?php echo $resimler; ?>" alt="<?php echo $resimAlt; ?>" width="<?php echo $genislik;50 ?>" height="<?php echo $yukseklik;50 ?>" alt=""> </div>
    </header>
    <div class="5-navbar" id="nav-bar">
        <nav class="nav">
            <div> <a href="hakkimizda.php" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">TO-DO?</span> </a>
                <div class="nav_list"> <a href="gorevler.php" class="nav_link active"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Görevlerim</span></a>
				<ul class="list-group">
                    <!DOCTYPE html>
                    <html>
                    <head>
                        <title>JQuery Repeater Örneği</title>
                        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.repeater/1.2.1/jquery.repeater.min.css">
                        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
                    </head>
                    <body>
                    <form id="repeaterForm">
                        <div data-repeater-list="items">
                            <div data-repeater-item>
                                <input type="text" name="item_name" placeholder="Görevinizi Yazınız.">
                                <button type="button" class="priority-button">Öncelik Seç</button>
                                <div class="priority-options" style="display:none;">
                                    <label>Öncelik:</label>
                                    <select name="item_priority">
                                        <option value="dusuk">Düşük!</option>
                                        <option value="orta">Orta!!</option>
                                        <option value="yuksek">Yüksek!!!</option>
                                    </select>
                                </div>
                                <input type="text" class="date-picker" name="item_start_date" placeholder="Başlangıç Tarihi">
                                <input type="text" class="date-picker" name="item_end_date" placeholder="Bitiş Tarihi">
                                <input data-repeater-delete type="button" value="Sil">
                            </div>
                        </div>
                        <input data-repeater-create type="button" value="Yeni Görev Ekle">
                        <input type="submit" value="Kaydet">
                    </form>

                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.repeater/1.2.1/jquery.repeater.min.js"></script>
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
                                        $(this).siblings('.priority-options').toggle();
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

                    <a href="#" class="nav_link"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">Rehber</span> </a>
				<a href="#" class="nav_link"> <i class='bx bx-message-square-detail nav_icon'></i> <span class="nav_name">Mesajlar</span> </a>
				<a href="#" class="nav_link"> <i class='bx bx-bookmark nav_icon'></i> <span class="nav_name">Yer İşaretleri</span> </a>
				<a href="#" class="nav_link"> <i class='bx bx-folder nav_icon'></i> <span class="nav_name">Dosyalar</span> </a>
				
				
				</div>
           
		   </div> <a href="cikis.php" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">Çıkış Yap</span> </a>
        </nav>
    </div>
   
	
	<style>
	
	
	@import url("https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap");:root{--header-height: 3rem;--nav-width: 68px;--first-color: #4723D9;--first-color-light: #AFA5D9;--white-color: #3e1852;--body-font: 'Nunito', sans-serif;--normal-font-size: 1rem;--z-fixed: 100}  *,::before,::after{box-sizing: border-box}  body{position: relative;margin: var(--header-height) 0 0 0;padding: 0 1rem;font-family: var(--body-font);font-size: var(--normal-font-size);transition: .5s}  a{text-decoration: none}  .header{width: 100%;height: var(--header-height);position: fixed;top: 0;left: 0;display: flex;align-items: center;justify-content: space-between;padding: 0 1rem;background-color: var(--white-color);z-index: var(--z-fixed);transition: .5s}  .header_toggle{color: var(--first-color);font-size: 1.5rem;cursor: pointer}  .header_img{width: 35px;height: 35px;display: flex;justify-content: center;border-radius: 50%;overflow: hidden}  .header_img img{width: 40px}  .l-navbar{position: fixed;top: 0;left: -30%;width: var(--nav-width);height: 100vh;background-color: var(--first-color);padding: .5rem 1rem 0 0;transition: .5s;z-index: var(--z-fixed)}  .nav{height: 100%;display: flex;flex-direction: column;justify-content: space-between;overflow: hidden}  .nav_logo, .nav_link{display: grid;grid-template-columns: max-content max-content;align-items: center;column-gap: 1rem;padding: .5rem 0 .5rem 1.5rem}  .nav_logo{margin-bottom: 2rem}  .nav_logo-icon{font-size: 1.25rem;color: var(--white-color)}  .nav_logo-name{color: var(--white-color);font-weight: 700}  .nav_link{position: relative;color: var(--first-color-light);margin-bottom: 1.5rem;transition: .3s}  .nav_link:hover{color: var(--white-color)}  .nav_icon{font-size: 1.25rem}  .show{left: 0}  .body-pd{padding-left: calc(var(--nav-width) + 1rem)}  .active{color: var(--white-color)}  .active::before{content: '';position: absolute;left: 0;width: 2px;height: 32px;background-color: var(--white-color)}  .height-100{height:100vh}@media screen and (min-width: 768px){body{margin: calc(var(--header-height) + 1rem) 0 0 0;padding-left: calc(var(--nav-width) + 2rem)}  .header{height: calc(var(--header-height) + 1rem);padding: 0 2rem 0 calc(var(--nav-width) + 2rem)}  .header_img{width: 40px;height: 40px}  .header_img img{width: 45px}  .l-navbar{left: 0;padding: 1rem 1rem 0 0}  .show{width: calc(var(--nav-width) + 156px)}  .body-pd{padding-left: calc(var(--nav-width) + 188px)}}
	
	</style>
	
	</body>
	</html>




























 <?php
 /*<!DOCTYPE html>
 <html>
 <head>
     <title>JQuery Repeater Örneği</title>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.repeater/1.2.1/jquery.repeater.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
 </head>
 <body>
 <form id="repeaterForm">
     <div data-repeater-list="items">
         <div data-repeater-item>
             <input type="text" name="item_name" placeholder="Görevinizi Yazınız.">
             <button type="button" class="priority-button">Öncelik Seç</button>
             <div class="priority-options" style="display:none;">
                 <label>Öncelik:</label>
                 <select name="item_priority">
                     <option value="dusuk">Düşük!</option>
                     <option value="orta">Orta!!</option>
                     <option value="yuksek">Yüksek!!!</option>
                 </select>
             </div>
             <input type="text" class="date-picker" name="item_start_date" placeholder="Başlangıç Tarihi">
             <input type="text" class="date-picker" name="item_end_date" placeholder="Bitiş Tarihi">
             <input data-repeater-delete type="button" value="Sil">
         </div>
     </div>
     <input data-repeater-create type="button" value="Yeni Görev Ekle">
     <input type="submit" value="Kaydet">
 </form>

 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.repeater/1.2.1/jquery.repeater.min.js"></script>
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
                     $(this).siblings('.priority-options').toggle();
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

 <a href="#" class="nav_link"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">Rehber</span> </a>
 <a href="#" class="nav_link"> <i class='bx bx-message-square-detail nav_icon'></i> <span class="nav_name">Mesajlar</span> </a>
 <a href="#" class="nav_link"> <i class='bx bx-bookmark nav_icon'></i> <span class="nav_name">Yer İşaretleri</span> </a>
 <a href="#" class="nav_link"> <i class='bx bx-folder nav_icon'></i> <span class="nav_name">Dosyalar</span> </a>

*/ ?>
