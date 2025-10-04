<!DOCTYPE html>
<html>
<head>
    <style>
        body{
            background-color:rgb(255, 185, 255);
        }
        .divform{
            background-color:purple;
            height:150px;
            width:350px;
            margin:100px 575px 100px 575px;
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

    <h1>GİRİŞ</h1>
    <div class="divform">
        <form method="POST" action="login.php">
        <div class="div1">
        Kullanıcı Adı: <input type="text" name="kadi"><br><br>
        Şifre: <input type="password" name="ksifre"><br><br>
        
        <input type="submit" name="login" value="Giriş">
        </div>
    
        </form> 
   </div>
</body>
</html>