<?php
session_start();
include("baglanti.php");

?>

        <!DOCTYPE html>
        <html lang="tr">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title><?php echo $row['marka'] . " " . $row['model']; ?> Detayları</title>
            <style>
                   body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
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
                 width: 1250px;
                    margin: 20px auto;
                    background-color: white;
                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                    padding: 20px;
                    border-radius: 10px;
                }
                .details {
                    display: flex;
                    gap:20px;
                }
                
                
                       .details table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 15px;
}

.details th, .details td {
    border: 1px solid #ddd;
    padding: 10px;
    text-align: left;
}

.details th, {
    background-color: #3183e0;
    color: white;
    width: 35%;
}

.details td {
    background-color: #f9f9f9;
}
                .action-button {
                    display: block;
                    width: 97%;
                    margin-top: 20px;
                    text-align: center;
                    background-color: #3183e0;
                    color: white;
                    padding: 15px;
                    border-radius: 8px;
                    text-decoration: none;
                    font-weight: bold;
                    transition: background-color 0.3s ease;
                }
                .action-button:hover {
                    background-color: #106db0;
                }
                  .gallery {        
            display:flex;
            align-items: center;
            margin: 20px;
                      gap:20px;
                      
        }
        .main-photo {
            width: 950px;
            height: 700px;         
            object-fit: contain;
            margin-bottom: 15px;
            cursor: pointer;
            
    background-color: white;
    
        }
        .thumbnails {
            display:grid;
            overflow-y: scroll;
           gap:5px;
            max-height:  700px;
         
        }
        .thumbnails img {
            width: 200px;
            height: 100%;
            cursor: pointer;
            border: 2px solid #ddd;
            border-radius: 5px;
            object-fit: contain;
        }
        .thumbnails img:hover {
            border: 2px solid #3183e0;
        }
       
                @media (max-width: 1500px) {
    body {
        transform: scale(0.9);
        transform-origin: top left;
        width: 112%;
    }
}
                @media (max-width: 1410px) {
                       
        header { 
            padding: 5px 15px 5px 20%; 
            gap:1%;
        }
        header a {
            font-size: 1.4em;
        }
        .login-button {
            font-size: 1.2em;
        }
        nav a {
            font-size: 1.2em;
        }
        .container {
            width: 1000px;
            padding: 20px;
                }
        .details {
            display:block;
            gap:20px;
                }
        .details th, .details td {
      font-size: 1.4em;
}
                    .action-button {
                        font-size: 1.4em;
                    }
        .gallery {        
            display:contents;
            align-items: center;
            margin: 20px;
            gap:20px;
                      
        }
        .main-photo {
            width: 950px;
            height: 700px;            
        }
        .thumbnails {
            display:flex;
            overflow-x: scroll;
           gap:5px;
            max-height:  200px;
         
        }
        .thumbnails img {
            width: 100%;
            height: 150px;
            cursor: pointer;
            border: 2px solid #ddd;
            border-radius: 5px;
            object-fit: contain;
        }   
}
                                @media (max-width: 1040px) {
                       
        header { 
            padding: 5px 15px 5px 15%; 
        }
        header a {
            font-size: 1.2em;
        }
        .login-button {
            font-size: 1em;
        }
        .container {
            width: 850px;
            padding: 10px;
                }     
        .main-photo {
            width: 840px;
            height: 600px;            
        }
}
                        @media (max-width: 850px) {
                       
        header { 
            padding: 5px 15px 5px 0px; 
        }
        header a {
            font-size: 1.1em;
        }
        .container {
            width: 630px;
            padding: 10px;
                }     
        .main-photo {
            width: 620px;
            height: 450px;            
        }
}
            </style>
            <script>
    function changePhoto(src) {
        document.getElementById('mainPhoto').src = src;
    }
</script>
        </head>
        <body>
             <header>
    <a href="ana_sayfa_uye.php"><h1>Araba Kiralama Hizmeti</h1></a>
    <?php
                     $aracDetayId = $_GET['arac_detay_id'];
    $_SESSION['arac_detay_id'] = $aracDetayId;

    $sql = "SELECT araclar.*, arac_detay.*, rezervasyon.*, musteriler.ad_soyad, odeme.toplam_fiyat, subeler.*
            FROM araclar 
            JOIN arac_detay ON araclar.id = arac_detay.arac_id 
            LEFT JOIN rezervasyon ON arac_detay.id = rezervasyon.arac_detay_id
            LEFT JOIN musteriler ON rezervasyon.musteri_id = musteriler.id
             LEFT JOIN odeme on rezervasyon.odeme_id = odeme.id
             LEFT JOIN subeler on rezervasyon.teslim_alinacak_sube_id = subeler.id
            WHERE arac_detay.id = $aracDetayId";
    $result = mysqli_query($baglan, $sql);
                 
                 
        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $ad_soyad = $row['ad_soyad'];
           echo' <a href="dashbord.php" class="login-button">' . $ad_soyad . ' </a>';
            echo '</div>';
        }
    ?>
    <a href="ana_sayfa.php" class="login-button">Çıkış Yap</a>
</header>
    
    <nav>
        <a href="filomuz_uye.php">Filomuz</a>
        <a href="şubelerimiz_uye.php">Şubelerimiz</a>
        <a href="#">Hakkımızda</a>
        <a href="#">İletişim</a>
    </nav>
      
            <?php
       if (isset($_GET['arac_detay_id'])) {
    $aracDetayId = $_GET['arac_detay_id'];
    $_SESSION['arac_detay_id'] = $aracDetayId;

    $sql = "SELECT araclar.*, arac_detay.*, rezervasyon.*, musteriler.ad_soyad, odeme.toplam_fiyat, subeler.*
            FROM araclar 
            JOIN arac_detay ON araclar.id = arac_detay.arac_id 
            LEFT JOIN rezervasyon ON arac_detay.id = rezervasyon.arac_detay_id
            LEFT JOIN musteriler ON rezervasyon.musteri_id = musteriler.id
             LEFT JOIN odeme on rezervasyon.odeme_id = odeme.id
             LEFT JOIN subeler on rezervasyon.teslim_alinacak_sube_id = subeler.id
            WHERE arac_detay.id = $aracDetayId";
    $result = mysqli_query($baglan, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        ?>     
            
            
            <div class="container">
                <div class="gallery">
    <img id="mainPhoto" class="main-photo" src="<?php echo $row['on_foto']; ?>" alt="Ana Fotoğraf" onclick="openFullscreen(this.src)">
    <div class="thumbnails">
        <img src="<?php echo $row['ic_foto']; ?>" alt="İç Görünüm" onclick="changePhoto(this.src)">
        <img src="<?php echo $row['sag_foto']; ?>" alt="Sağ Görünüm" onclick="changePhoto(this.src)">
        <img src="<?php echo $row['sol_foto']; ?>" alt="Sol Görünüm" onclick="changePhoto(this.src)">
        <img src="<?php echo $row['on_foto']; ?>" alt="Ön Görünüm" onclick="changePhoto(this.src)">
        <img src="<?php echo $row['arka_foto']; ?>" alt="Arka Görünüm" onclick="changePhoto(this.src)">
    </div>
</div>
                
                

               <div class="details">
    <table>
        <tr>
            <th colspan="2" style="text-align:center;"><?php echo $row['marka'] . " " . $row['model']; ?></th>
        </tr>
        <tr>
            <th>Yıl</th>
            <td><?php echo $row['yil']; ?></td>
        </tr>
        <tr>
            <th>Motor Hacmi</th>
            <td><?php echo $row['motor_hacmi']; ?></td>
        </tr>
        <tr>
            <th>Motor Tipi</th>
            <td><?php echo $row['motor_tipi']; ?></td>
        </tr>
        <tr>
            <th>Vites Tipi</th>
            <td><?php echo $row['vites_tipi']; ?></td>
        </tr>
        <tr>
            <th>Plaka</th>
            <td><?php echo $row['plaka']; ?></td>
        </tr>
        <tr>
            <th>Kilometre</th>
            <td><?php echo   $row['kilometre']; ?> km</td>
        </tr>
        <tr>
            <th>Renk</th>
            <td><?php echo $row['renk']; ?></td>
        </tr>
        <tr>
            <th>Donanım</th>
            <td><?php echo $row['donanim']; ?></td>
        </tr>
    </table>

           <?php if (isset($row['ad_soyad'])): ?>
        <table border="1" cellpadding="10" cellspacing="0">
              <tr>
            <th colspan="2" style="text-align:center;">Rezervasyon Bilgileri</th>
        </tr>
            <tr>
                <th>Kiralayan Kişi</th>
                <td><?php echo $row['ad_soyad']; ?></td>
            </tr>
            <tr>
                <th>Teslim Alınan Şube</th>
                <td><?php echo $row['il'] . " - " . $row['ilce']; ?></td>
            </tr>
            <tr>
                <th>Teslim Edilen Şube</th>
                <td>
                    <?php
                        echo $row['il'] . " - " . $row['ilce'];
                    ?>
                </td>
            </tr>
             <tr>
                <th>Teslim Alınan Tarih</th>
                <td><?php echo $row['teslim_alinacak_tarih'] ; ?></td>
            </tr>
            <tr>
               <th>Teslim Alınan Saat</th>
<td><?php echo date('H:i', strtotime($row['teslim_alinacak_saat'])); ?></td>
            </tr>
            <tr>
                <th>Teslim Edilen Tarih</th>
                <td><?php echo $row['teslim_edilecek_tarih'] ; ?></td>
            </tr>
            <tr>
                <th>Teslim Edilen Saat</th>
<td><?php echo date('H:i', strtotime($row['teslim_edilecek_saat'])); ?></td>
            </tr>
            <tr>
                <th>Toplam Kiralama Tutarı</th>
                <td><?php echo $row['toplam_fiyat']; ?>.00 TL</td>
            </tr>
        </table>
        </div>
        <br>
        <a href="rezervasyon_formu1_uye.php" class="action-button">Yeniden Kirala</a>
    </div>
<?php else: ?>
    <p>Bu araç için aktif bir rezervasyon yok.</p>
<?php endif; ?>
            
            
</body>
</html>

<?php
    } else {
        echo "<p>Bu araçla ilgili bilgi bulunamadı. Araç Detay ID: " . htmlspecialchars($aracDetayId) . "</p>";
    }
} else {
    echo "<p>Geçerli bir araç seçilmedi.</p>";
}
?>
