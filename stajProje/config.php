<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gorev";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Veritabanı bağlantısı başarısız: " . $conn->connect_error);
}

function doAuthentication($email, $password)
{
    global $conn;
    // Kullanıcı doğrulama işlemini gerçekleştir
    $query = "SELECT * FROM users WHERE email='$email' AND parola='$password'";
    $result = $conn->query($query);
    $sonuc = $result->fetch_array();

    if ($result->num_rows > 0) {

        $_SESSION["ISLOGIN"] = true;
        $_SESSION["USERNAME"] = $email;
        $_SESSION["USER_ID"] = $sonuc["kullanici_id"];

        return true;

    } else {
        return false; // Doğrulama başarısız
    }
}

function doregistiration($email, $kullaniciadi, $parola)
{
    global $conn;
    $sql = "INSERT INTO users (kullaniciadi, email, parola) VALUES ('$kullaniciadi', '$email', '$parola')";

    $conn->query($sql);
}

if ($conn->connect_error) {
    die("Veritabanı bağlantısı başarısız: " . $conn->connect_error);
}

function dummyInsertTask($item_name, $item_priority, $item_end_date, $done, $item_start_date) {
    global $conn;
    $kullanici_id = $_SESSION["USER_ID"];
    $bitTarih = date("Y-m-d",strtotime($item_end_date));
    $basTarih = date("Y-m-d",strtotime($item_start_date));
    $sql = "INSERT INTO tasks (kullanici_id,tanim, oncelik, bitis_tarihi, tamamlama, olusturulma_zamani) 
            VALUES ('$kullanici_id',
                    '$item_name',
                    '$item_priority',
                    '$bitTarih',
                    '$done',
                    '$basTarih')";

    /*var_dump("INSERT INTO tasks (kullanici_id,tanim, oncelik, bitis_tarihi, tamamlama, olusturulma_zamani)
            VALUES ('$kullanici_id',
                    '$item_name',
                    '$item_priority',
                    '$item_end_date',
                    '$done',
                    '$item_start_date')");*/

   $conn->query($sql);
}


?>
