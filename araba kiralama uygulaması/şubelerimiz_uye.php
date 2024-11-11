<?php
include("baglanti.php");
session_start();
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Şubelerimiz</title>
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
            display: flex;
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            flex-grow: 1;
        }
        .branch-list {
            width: 25%;
            background-color: #f1f1f1;
            padding: 10px;
            border-right: 1px solid #ddd;
            overflow-y: auto;
            transition: all 0.3s;
        }
        .branch-list.collapsed {
            display: none;
        }
        .branch-list h3 {
            color: #3183e0;
            text-align: center;
        }
        .branch-list ul {
            list-style-type: none;
            padding: 0;
        }
        .branch-list ul li {
            padding: 10px;
            background-color: #fff;
            margin-bottom: 10px;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
            transition: background-color 0.3s;
        }
        .branch-list ul li:hover, .branch-list ul li.active {
            background-color: #0b5a8e;
            color: white;
        }
        .branch-details {
            width: 75%;
            padding: 20px;
        }
        .branch-details h2 {
            color: #3183e0;
        }
        .branch-details p {
            margin: 10px 0;
            color: #555;
        }
        .branch-details h4 {
            color: #3183e0;
        }
        .filter-section {
            margin-top: 20px;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #f9f9f9;
        }
        .filter-section h3 {
           text-align: center;
            color: #3183e0;
        }
        .filter-section label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #333;
        }
        .filter-section input, .filter-section select {
            width: 100%;
            margin-bottom: 15px;
            padding: 8px;
            border-radius: 6px;
            border: 1px solid #ccc;
            font-size: 1em;
            box-sizing: border-box;
            margin-right: 10px;
            display: inline-block;
        }
        .filter-section button {
            display: block;
            width: 100%;
            background-color: #3183e0;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 8px;
            font-size: 1.1em;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-top: 10px;
        }
        .filter-section button:hover {
            background-color: #106db0;
        }
        .map {
            width: 100%;
            height: 300px;
            background-color: #ddd;
            margin-top: 20px;
        }
        footer {
            background-color: #3183e0;
            color: white;
            text-align: center;
            padding: 10px;
            margin-top: auto;
            width: 100%;
            bottom: 0;
            font-size: 1.5em;
            font-weight: bold;
        }
        .menu-toggle {
            display: none;
            background-color: #3183e0;
            color: white;
            padding: 10px;
            font-size: 1.5em;
            border: none;
            cursor: pointer;
        }
         
        @media screen and (max-width: 1500px) { 
            .container {
                max-width: 1450px;
            }
              header a{
               font-size: 1.3em;
            }
        }
         @media screen and (max-width: 1300px) { 
             header a{
               font-size: 1em;
            }
             
.login-button {
    font-size: 1em;
}
        }
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
              font-size: 2em;
        }
             .filter-container {
            padding: 5px;
        }
        .filter {
            padding: 15px;

        }
        .filter div {
            flex-basis: 48%;
        }
        .filter div label {
              font-size: 1em;
        }
         .filter div select{
            padding: 10px;
            border-radius: 6px;
            border: 1px solid #ccc;
            font-size: 0.65em;
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
        
        @media screen and (max-width: 768px) {
            .menu-toggle {
                display: block;
            }
            .container {
                  max-width: 768px;
                flex-direction: column;
            }
            .branch-list {
                width: 100%;
            }
            .branch-details {
                width: 100%;
            }
             header a{
               font-size: 0.9em;
            }
        }
    </style>
     <script>
        function toggleDistricts(cityId) {
            const city = document.getElementById(cityId);
            city.style.display = city.style.display === "none" ? "block" : "none";
        }

        function selectBranch(branchId) {
            const xhr = new XMLHttpRequest();
            xhr.open("POST", "get_branch_info.php", true);
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhr.onload = function() {
                if (this.status === 200) {
                    document.getElementById('branch-info').innerHTML = this.responseText;
                }
            };
            xhr.send("branch_id=" + branchId);
        }

        function loadDefaultBranch() {
            selectBranch(2); 
        }

        function toggleMenu() {
            const menu = document.getElementById('branch-list');
            menu.classList.toggle('collapsed');
        }
    </script>
</head>
<body onload="loadDefaultBranch()">
     <header>
    <a href="ana_sayfa_uye.php"><h1>Araba Kiralama Hizmeti</h1></a>
    <?php
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
        <a href="şubelerimiz_uye.php">Şubelerimiz</a>
        <a href="#">Hakkımızda</a>
        <a href="#">İletişim</a>
    </nav>

    <div class="container">
        <div class="branch-list" id="branch-list">
            <h3>Şubelerimiz</h3>
            <ul>
                <?php
                include("baglanti.php");
                $sql = "SELECT id, il, ilce FROM subeler ORDER BY il ASC, ilce ASC";
                $result = mysqli_query($baglan, $sql);

                $currentCity = '';
                while ($row = mysqli_fetch_assoc($result)) {
                    $city = $row['il'];
                    $district = $row['ilce'];
                    $branchId = $row['id']; 

                    if ($city !== $currentCity) {
                        if ($currentCity !== '') {
                            echo "</ul>";
                        }
                        echo "<li onclick=\"toggleDistricts('". strtolower($city) ."')\">$city</li>";
                        echo "<ul id='". strtolower($city) ."' style='display: none;'>";
                        $currentCity = $city;
                    }
                    echo "<li onclick=\"selectBranch('$branchId')\">$district</li>";
                }

                if ($currentCity !== '') {
                    echo "</ul>";
                }
                ?>
            </ul>
        </div>

        <div class="branch-details" id="branch-info">
            <p>Varsayılan şube bilgisi yükleniyor...</p>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Rent a Car / Tüm hakları saklıdır.</p>
    </footer>
</body>
</html>
