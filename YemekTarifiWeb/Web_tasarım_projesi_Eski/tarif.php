<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yemek Tarifi Ekle</title>
    <style>
        body{
            background-color:rgb(255, 185, 255);
        }
        .divform{
            background-color:purple;
            height:300px;
            width:500px;
            margin:80px 500px 80px 500px;
            text-align:center;
            padding:20px;
            color:white;
            border-radius:10px;
        }
        .div1{
            margin:40px;
        }
        h1{
            text-align:center;
        }
    </style>
</head>
<body>

    <h1>Yemek Tarifi Ekle</h1>
    <div class="divform">
    <form action="tarif_ekle.php" method="POST">
        <div class="div1">
       
        <label for="baslik">Tarif Başlığı:</label>
        <input type="text" id="baslik" name="baslik" ><br>
        <br>
        
        <label for="malzeme">Tarif Malzemeleri:</label>
        <input type="text" id="malzeme" name="malzeme" ><br>
        <br>


        
        <label for="icerik">Tarif İçeriği:</label>
        <textarea id="icerik" name="icerik" ></textarea><br>
        <br>

        <label for="resim">Tarif Malzemeleri:</label>
        <input type="text" id="resim" name="resim" ><br>
        <br>

        <button type="submit">Tarifi Kaydet</button>
        </div>

        
    </form>
</div>

</body>
</html>
