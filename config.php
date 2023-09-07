
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gorev";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Veritabanı bağlantısı başarısız: " . $conn->connect_error);
}

function doAuthentication($email, $password) {
 global $conn;
    // Kullanıcı doğrulama işlemini gerçekleştir
    $query = "SELECT * FROM users WHERE email='$email' AND parola='$password'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
		
		session_start();
		$_SESSION["ISLOGIN"] = true;
		$_SESSION["USERNAME"]=$username;
		
        return true;
		
    } else {
        return false; // Doğrulama başarısız
    }
}

function doregistiration($email,$kullaniciadi,$parola){
	global $conn;
	  $sql = "INSERT INTO users (kullaniciadi, email, parola) VALUES ('$kullaniciadi', '$email', '$parola')";

   $conn->query($sql);

}
?>
