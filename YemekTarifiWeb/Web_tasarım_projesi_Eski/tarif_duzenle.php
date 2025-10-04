<?php
session_start();

require_once "functions.php";

if(isset($_SESSION["kadi"])){
    $baglanti=baglan();
    $tarif_id = $_GET["id"];
    $sorgu = "SELECT * FROM tarif WHERE tarif_id=$tarif_id";
    $sonuc = mysqli_query($baglanti,$sorgu);
    $satir = mysqli_fetch_assoc($sonuc);
  
    echo
    '
    <!DOCTYPE html>
    <html>
    <head>

    </head>
    <body>
    <form action="update.php?id='.$tarif_id.'" method="POST">
    Başlık :<input type="text" name="baslik" value="'.$satir["baslik"].'" ><br>
    Malzeme :<input type="text" name="malzeme" value="'.$satir["malzeme"].'"><br>
    İçerik :<input type="text" name="icerik" value="'.$satir["icerik"].'"><br>
    Resim :<input type="text" name="resim" value="'.$satir["resim"].'"><br>

    <input type="submit" name="kaydet" value="Kaydet">
    </form> 
    </body>
    </html>';

}else{
    header("location:index.php");
}
?>