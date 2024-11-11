<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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
            max-width: 1200px;
            margin: 40px auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
        .dashboard-section {
            margin-bottom: 30px;
        }
        .dashboard-section h2 {
            color: #3183e0;
            font-size: 1.9em;
            margin-bottom: 10px;
        }
        .dashboard-section table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        .dashboard-section table, .dashboard-section th, .dashboard-section td {
            border: 1px solid #ddd;
        }
        .dashboard-section th, .dashboard-section td {
            padding: 12px;
            text-align: center;
        }
        
        .dashboard-section th {
            background-color: #3183e0;
            color: white;
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
  
   
    </style>
</head>
<body>
   <header>
    <a href="ana_sayfa_uye.php"><h1>Araba Kiralama Hizmeti</h1></a>
    <?php
    include("baglanti.php");
    session_start();
    if (isset($_SESSION['musteri_id'])) {
        $musteri_id = $_SESSION['musteri_id'];
        $sql = "SELECT ad_soyad FROM musteriler WHERE id = $musteri_id";
        $result = mysqli_query($baglan, $sql);
        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $ad_soyad = $row['ad_soyad'];
           echo' <a href="dashbord.php" class="login-button">' . $ad_soyad . ' </a>';
            echo '</div>';
        }
    }
    ?>
    <a href="ana_sayfa.php" class="login-button">Çıkış Yap</a>
</header>

    <nav>
        <a href="filomuz_uye.php">Filomuz</a>
        <a href="subelerimiz_uye.php">Şubelerimiz</a>
        <a href="#">Hakkımızda</a>
        <a href="#">İletişim</a>
    </nav>

    <div class="container">
        <div class="dashboard-section">
            <h2>Aktif Kiralamalar</h2>
            <table>
                <tr>
                    <th>Araç</th>
                    <th>Teslim Alınacak Tarih</th>
                    <th>Teslim Edilecek Tarih</th>
                </tr>
                <?php
                include("baglanti.php");
                if (isset($_SESSION['musteri_id'])) {
                    $musteri_id = $_SESSION['musteri_id'];
                    $sql = "SELECT * FROM rezervasyon
                    JOIN arac_detay ON rezervasyon.arac_detay_id = arac_detay.id
                    JOIN araclar ON arac_detay.arac_id = araclar.id
                   WHERE musteri_id = $musteri_id AND teslim_alinacak_tarih <= CURDATE() AND teslim_edilecek_tarih >= CURDATE() ";
                    $result = mysqli_query($baglan, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                          echo "<td><a href='arac_detay.php?arac_detay_id=" . $row['arac_detay_id'] . "'>" . $row['marka'] . " " . $row['model'] . "</a></td>";
                            echo "<td>" . $row['teslim_alinacak_tarih'] . "</td>";
                            echo "<td>" . $row['teslim_edilecek_tarih'] . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='3'>Aktif kiralamanız bulunmamaktadır.</td></tr>";
                    }
                }
                ?>
            </table>
        </div>

<div class="dashboard-section">
    <h2>Gelecek Kiralamalar</h2>
    <table>
        <tr>
            <th>Araç</th>
            <th>Teslim Alınacak Tarih</th>
            <th>Teslim Edilecek Tarih</th>
            <th>Rezervasyon İptali</th>
        </tr>
        <?php
        if (isset($_SESSION['musteri_id'])) {
            $musteri_id = $_SESSION['musteri_id'];
            $sql = "SELECT * FROM rezervasyon
                    JOIN arac_detay ON rezervasyon.arac_detay_id = arac_detay.id
                    JOIN araclar ON arac_detay.arac_id = araclar.id WHERE musteri_id = $musteri_id AND teslim_alinacak_tarih > CURDATE()";
            $result = mysqli_query($baglan, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td><a href='arac_detay.php?arac_detay_id=" . $row['arac_detay_id'] . "'>" . $row['marka'] . " " . $row['model'] . "</a></td>";
                    echo "<td>" . $row['teslim_alinacak_tarih'] . "</td>";
                    echo "<td>" . $row['teslim_edilecek_tarih'] . "</td>";
                    echo "<td><a href='teslim_islemi.php?rezervasyon_id=" . $row['id'] . "'><button>İptal Et</button></a></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>Gelecek kiralamanız bulunmamaktadır.</td></tr>";
            }
        }
        ?>
    </table>
</div>

        <div class="dashboard-section">
            <h2>Geçmiş Kiralamalar</h2>
            <table>
                <tr>
                    <th>Araç</th>
                    <th>Teslim Alınacak Tarih</th>
                    <th>Teslim Edilecek Tarih</th>
                </tr>
                <?php
                if (isset($_SESSION['musteri_id'])) {
                    $musteri_id = $_SESSION['musteri_id'];
                    $sql = "SELECT * FROM rezervasyon
                    JOIN arac_detay ON rezervasyon.arac_detay_id = arac_detay.id
                    JOIN araclar ON arac_detay.arac_id = araclar.id WHERE musteri_id = $musteri_id AND teslim_edilecek_tarih < CURDATE()";
                    $result = mysqli_query($baglan, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                          echo "<td><a href='arac_detay.php?arac_detay_id=" . $row['arac_detay_id'] . "'>" . $row['marka'] . " " . $row['model'] . "</a></td>";
                            echo "<td>" . $row['teslim_alinacak_tarih'] . "</td>";
                            echo "<td>" . $row['teslim_edilecek_tarih'] . "</td>";
                            echo "</tr>";
                            
                        }
                    } else {
                        echo "<tr><td colspan='3'>Geçmiş kiralamanız bulunmamaktadır.</td></tr>";
                    }
                }
                ?>
            </table>
        </div>

    </div>
    <footer>
    <p>&copy; 2024 Rent a Car / Tüm hakları saklıdır.</p>
</footer>
</body>
</html>
