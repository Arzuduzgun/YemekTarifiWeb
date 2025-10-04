<!DOCTYPE html>
<html>
    <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Yemek Tarifleri</title>
        <style>
         
            body {
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            
            
        }

        header {
            background-color: #b64dd6;
            color: white;
            text-align: center;
            padding: 1em;
            
        }
        header img {
            width: 90px; 
            height: auto;
            margin-right: 1em;
            float:left;
        }

        header h1{
            font-family:Lucida Handwriting;
            font-style: italic;
        }


        nav {
            background-color: #3f0658;
            color: white;
            padding: 0.5em;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        nav li {
            display: inline;
            margin-right: 1em;
        }

        nav a {
            text-decoration: none;
            color: white;
        }

        .section1 {
            padding: 1em;
            margin:50px;
            border:5px double #514c51;
            border-radius: 5px;
            width:500px;
            float:right;
            height:150px;
            
          
        }
        .section2{
            padding: 1em;
            margin:50px;
            border:5px double #514c51;
            border-radius: 5px;
            width:500px;
            height: 150px;
        }
        section h2{
            font-family:Lucida Handwriting;
            color:rgb(26, 51, 97);
        }

        article {
            margin-bottom: 2em;
        }

        footer {
            background-color: #21042e;
            color: white;
            text-align: center;
            padding: 1em;
            bottom: 0;
            width: 100%;
        }
        .label1{
            margin: 10px;
            border: 1px solid purple;
        }
        div{
            border:10px solid #21042e;
            width: 400px;
            height:300px;
            text-align: center;
            margin:0px 550px 50px 550px;
        }
        #iletisim {
            margin: 20px;
            padding: 20px;
            border: 1px solid #cccccc;
            border-radius: 5px;
            background-color: #ead6f2;
        }

        form {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }

        label {
            margin-bottom: 5px;
            display: block;
            font-weight: bold;
        }

        input,
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #dba4ea;
            border-radius: 4px;
        }

        button {
            padding: 10px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .img1{
            height:300px;
            width: 300px;
            
        }
            

        </style>
    </head>
    <body>

        <header>
            <img src="arzu.png">
            <h1>Mutfak Perisi</h1>
        </header>
        <nav>
            <ul>
                <li><a href="proje.php">Ana Sayfa</a></li>
                <li><a href="kahvalti.php">Kahvaltı Tarifleri</a></li>
                <li><a href="borek.php">Börek Tarifleri</a></li>
                <li><a href="corba.php">Çorba Tarifleri</a></li>
                <li><a href="aksam.php">Akşam Yemeği Tarifleri</a></li>
                <li><a href="tatli.php">Tatlı Tarifleri</a></li>
                
            </ul>
        </nav>

        <section class="section1">
            <h2>Afiyet Olsun!</h2>
            <p>Yapacağınız yemekler için şimdiden afiyet olsun.</p>
        </section>
        
        <section class="section2">
            <h2>Hoş Geldiniz!</h2>
            <p>En lezzetli yemek tarifleri burada. Yeni tarifler keşfedin ve deneyin.</p>
        </section>

        <div >
           <img class="img1" src="resim.png"> 
        </div>
        
        

        <br><br>
        

        <section id="iletisim">
            <h2>İletişim</h2>
            <p>Bize mesaj göndermek için aşağıdaki formu doldurun:</p>
            <br>
    
            <form action="#" method="post">
                <label for="ad">Adınız:</label>
                <input type="text" id="ad" name="ad" required>
    
                <label for="email">E-posta Adresiniz:</label>
                <input type="email" id="email" name="email" required>
    
                <label for="konu">Konu:</label>
                <input type="text" id="konu" name="konu" required>
    
                <label for="mesaj">Mesajınız:</label>
                <textarea id="mesaj" name="mesaj" rows="4" required></textarea>
    
                <button type="submit">Gönder</button>
            </form>
        </section>

        
         <footer>
            <p>&copy; 2024 Lezzetli Tarifler</p>
        </footer>
            
    </body>
</html>