<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filomuz</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

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

        .container {
            max-width: 100%;
            margin: 40px auto;
            padding: 20px;
            background-color: white;
        }

        h2 {
            text-align: center;
            color: #3183e0;
        }

        .car-grid {
            display: grid;
            grid-template-columns: repeat(5, 1fr); 
            gap: 20px;
            margin-top: 20px;
        }

        .car-card {
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #fff;
            box-shadow: 0 2px 6px #3183e0;
            overflow: hidden;
            position: relative;
            padding: 20px;
        }

        .car-card img {
            width: 100%;
            object-fit: contain;
            display: block;
        }

        .car-info {
            text-align: center;
            margin-top: 10px;
        }

        .car-info h3 {
            color: #3183e0;
            font-size: 1.9em;
            margin: 10px 0;
            font-weight: bold;
        }

        .car-features {
            display: flex;
            justify-content: space-between;
            text-align: left;
            margin-top: 10px;
        }

        .car-features div {
            width: 45%;
        }

        .car-features h4 {
            color: #3183e0;
            font-size: 1.7em;
            margin-bottom: 5px;
        }

        .car-features p {
            margin: 5px 0;
            font-size: 1.3em;
            color: #333;
        }
        

        .car-action {
            text-align: center;
            margin-top: 20px;
        }

        .car-action a {
            display: inline-block;
            padding: 15px 30px;
            background-color: #3183e0;
            color: white;
            text-decoration: none;
            border-radius: 20px;
            font-weight: bold;
        }

        .car-action a:hover {
            background-color: #106db0;
        }
        footer {
            background-color:#3183e0;
            color: white;
            text-align: center;
            padding: 10px;
            margin-top: auto;
            width: 100%;
            bottom: 0;
              font-size: 1.5em;
            font-weight: bold;
        }
                    @media screen and (max-width: 2560px) { 
            .container {
                max-width: 2560px;
            }
            .car-grid {
                grid-template-columns: repeat(4, 1fr);
            }
        }
    
          @media screen and (max-width: 1920px) { 
            .container {
                max-width: 1920px;
            }
            .car-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }
        @media screen and (max-width: 1500px) { 
            .container {
                max-width: 1450px;
            }
            .car-grid {
                grid-template-columns: repeat(2, 1fr);
            }
              header a{
               font-size: 1.5em;
            }
        }
         @media screen and (max-width: 1250px) { 
             header a{
               font-size: 1.2em;
            }
        }
        @media screen and (max-width: 1030px) { 
            .car-grid {
                grid-template-columns: 1fr;
            }
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
              font-size: 2em;
        }
               
        h2 {
            text-align: center;
            color: #3183e0;
            font-weight: bold;
              font-size: 1.5em;
        }
              .container {
            padding: 10px;

        }
            footer {
                font-size: 1.4em;
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
        <h2></h2>

        <?php
        include("baglanti.php");
        $sql = "SELECT * FROM araclar";
        $result = mysqli_query($baglan, $sql);

        if (mysqli_num_rows($result) > 0) {
            echo '<div class="car-grid">';
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<div class="car-card">';
                echo '<img src="' . $row['fotograf'] . '" alt="' . $row['marka'] . ' ' . $row['model'] . '">';
                echo '<div class="car-info">';
                echo '<h3>' . $row['marka'] . ' ' . $row['model'] . ' ' . $row['yil'] . '</h3>';
                echo '</div>';
                
                echo '<div class="car-features">';
                echo '<div>';
                echo '<h4>Araç Özellikleri</h4>';
                echo '<p>🧑‍🤝‍🧑 ' . $row['kisi_kapasitesi'] . ' Yetişkin</p>';
                echo '<p>🧳 ' . $row['bagaj_hacmi'] . '</p>';
                echo '<p>⛽ ' . $row['motor_tipi'] . '</p>';
                echo '<p>⚙️ ' . $row['vites_tipi'] . '</p>';
                echo '</div>';
                echo '<div>';
                echo '<h4>Kiralama Koşulları</h4>';
                echo '<p>📅 ' . $row['yas_sarti'] . ' Yaş ve Üstü</p>';
                echo '<p>🚗 Ehliyet Yaşı ' . $row['ehliyet_yasi'] . ' ve Üzeri</p>';
                echo '</div>';
                echo '</div>';

                 echo '<div class="car-action">';
echo '<a href="store_car_id1.php?arac_id=' . $row['id'] . '">Hemen Kirala</a>'; 
echo '</div>';
        echo '</div>';
                
            }
            echo '</div>';
        } else {
            echo '<p>Henüz araç bulunmamaktadır.</p>';
        }
        ?>
    </div>

    <footer>
        <p>&copy; 2024 Rent a Car / Tüm hakları saklıdır.</p>
    </footer>
</body>

</html>
