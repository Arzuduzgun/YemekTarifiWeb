<?php

require_once "functions.php";

$baglanti= baglan();
$tarif_id=$_GET["id"];
if(isset($_SESSION["kadi"])){
    $baglanti=baglan();
    $tarif_id = $_GET["id"];
    $sorgu = "SELECT * FROM tarif WHERE tarif_id=$tarif_id";
    $sonuc = mysqli_query($baglanti,$sorgu);
    $satir = mysqli_fetch_assoc($sonuc);
$sorgu = "DELETE FROM tarif WHERE tarif_id=$tarif_id";
$sonuc = mysqli_query($baglanti,$sorgu);
if($sonuc){
    echo "Tarif silinmiştir.";
}else{
    echo "Tarif silinmemiştir.";
}   
}
else{
    header("location:index.php");
}


?>