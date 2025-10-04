<?php
session_start();

require_once "functions.php";

if(isset($_SESSION["kadi"])){
    echo $_SESSION["kadi"]."<br>";
    echo '<a href="logout.php">Çıkış</a>';
    $baglanti = baglan();
    $sorgu = "SELECT * FROM tarif";
    $sonuc = mysqli_query($baglanti,$sorgu);
    //$satir = mysqli_fetch_assoc($sonuc);
    if($sonuc){
        echo'
        <table border="1">
        <tr>
            <th>ID</th>
            <th>Başlık</th>
            <th>Malzeme</th>
            <th>İçerik</th>
            <th>Resim</th>
            <th>Düzenle</th>
            <th>Sil</th>
        </tr>';
      
        while($satir = mysqli_fetch_assoc($sonuc)){
            echo "
            <tr>
            <td>".$satir["tarif_id"]."</td>
            <td>".$satir["baslik"]."</td>
            <td>".$satir["malzeme"]."</td>
            <td>".$satir["icerik"]."</td>
            <td>".$satir["resim"].'</td>
            <td><a href="tarif_duzenle.php?id='.$satir["tarif_id"].'">Düzenle</a></td>
            <td><a href="tarif_sil.php?id='.$satir["tarif_id"].'">Sil</a></td>
            </tr> ';
        }
        echo "</table>";

    }
    
}else{
    header("location:index.php");
}


?>