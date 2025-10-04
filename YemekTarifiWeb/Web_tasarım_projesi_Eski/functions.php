<?php

function baglan(){
    $baglanti = mysqli_connect("localhost","root","","tarifler");
    if($baglanti){
        echo "Bağlandık ";
    }else{
        echo "Problem var ";
    }
    return $baglanti;
}


?>