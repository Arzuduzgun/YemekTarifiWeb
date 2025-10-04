<?php
session_start();


$servername = "localhost";
$username = "root";
$password = "";
$database = "tarifler";

// Veritabanına bağlanma
$conn = new mysqli($servername, $username, $password, $database);

// Bağlantıyı kontrol et
if ($conn->connect_error) {
    die("Veritabanına bağlantı sağlanamadı: " . $conn->connect_error);
}



// Formdan gelen verileri al
$baslik = $_POST["baslik"];
$malzeme=$_POST["malzeme"];
$icerik = $_POST["icerik"];
$resim=$_POST["resim"];

$kullanici_id = 1;

// Tarifi veritabanına ekle
$sql = "INSERT INTO tarif (baslik,malzeme, icerik,resim) VALUES ('$baslik','$malzeme', '$icerik', '$resim')";
echo $sql;
if ($conn->query($sql) === TRUE) {
    echo "Tarif başarıyla eklendi.";
} else {
    echo "Hata: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>
