<?php
require_once "functions.php";

$baglanti=baglan();
$tarif_id = $_GET["id"];
$baslik = $_POST["baslik"]; 
$malzeme = $_POST["malzeme"]; 
$icerik = $_POST["icerik"]; 
$resim = $_POST["resim"];
$sorgu ="UPDATE tarif SET 
baslik='$baslik',malzeme='$malzeme',icerik='$icerik' ,resim='$resim'
WHERE tarif_id=$tarif_id";
echo $sorgu;
$sonuc=mysqli_query($baglanti,$sorgu);
if($sonuc){
    header("location:tarif_listele.php");
}else{
    echo "Problem var";
}
?>