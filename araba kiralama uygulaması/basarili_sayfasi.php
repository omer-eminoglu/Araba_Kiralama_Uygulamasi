<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rezervasyon Başarılı</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            min-height: 100vh;
            display: flex;
            flex-direction: column;}
        header { 
    background-color: #3183e0;
    color: white;
   height: 80px;
    padding: 5px;
    text-align: center;
    display: flex;
    align-items: center;
    justify-content: space-between; 
    padding: 5px 15px 5px 35%; 
    gap:1%;
}

header a {
    color: white;
    text-decoration: none;
    font-weight: bold;
    font-size: 1.7em;
    flex-grow: 1; 
    text-align: center; 
}

.login-button {
    background-color: #106db0;
    color: white;
    padding: 10px;
    border-radius: 8px;
    font-size: 1.2em;
    text-decoration: none;
    font-weight: bold;
    transition: background-color 0.3s ease;
}

.login-button:hover {
    background-color: #0b5a8e;
}
        nav {
            display: flex;
            justify-content: space-around;
            background-color:#106db0;
            padding: 15px;
        }
        nav a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            font-size: 1.5em;
        }
        footer {
            background-color: #3183e0;
            color: white;
            text-align: center;
            padding: 10px;
            width: 100%;
            bottom: 0;
            font-size: 1.5em;
            font-weight: bold;
            position: fixed;
        }
        
        .container {
            margin: 20px auto ;
            padding: 50px;
            border-radius: 10px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 80%;
        }
        .container h1 {
            color: #3183e0;
            font-size: 2em;
            margin-bottom: 20px;
        }
        .container p {
            font-size: 1.2em;
            color: #555;
        }
         .container button {
            padding: 12px 25px;
            background-color: #3183e0;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 1.2em;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin: 0 auto;
            display: block;
        }
        .container button:hover {
            background-color: #106db0;
        }
          @media screen and (max-width: 1500px) { 
              header a{
               font-size: 1.3em;
            }
        }
         @media screen and (max-width: 1300px) { 
             header a{
               font-size: 1em;
             }}
        @media screen and (max-width: 1030px) { 
            header a{
               font-size: 1em;
            }
            header{
                 padding: 5px 15px 5px 5%; 
            }
            nav a{
               font-size: 1em;
            }
                    
        h2 {
            text-align: center;
            color: #3183e0;
            font-weight: bold;
              font-size: 1.5em;
        }
            footer {
                font-size: 1.2em;
            }
               
        }       
        
    </style>
</head>
<body>
    <header>
       <a href="ana_sayfa.php"><h1>Araba Kiralama Hizmeti</h1></a>
       <a href="uye_girisi.php" class="login-button">Üye Girişi</a>
        <a href="uye_ol.php" class="login-button">Üye Ol</a>
    </header>
    
    <nav>
        <a href="filomuz.php">Filomuz</a>
        <a href="şubelerimiz.php">Şubelerimiz</a>
        <a href="#">Hakkımızda</a>
        <a href="#">İletişim</a>
    </nav>

    <div class="container">
        <h1>Rezervasyon Başarılı✅</h1>
        <p>Rezervasyonunuz başarıyla oluşturulmuştur. Rezervasyonun detayları mailinize iletilicektir.</p>
        <button type="button" onclick="window.location.href='ana_sayfa.php'">Ana Sayfaya Dön</button>
    </div>

    <footer>
        <p>&copy; 2024 Rent a Car / Tüm hakları saklıdır.</p>
    </footer>
</body>
</html>
