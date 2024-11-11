<?php
include("baglanti.php");
session_start();
?>

<!DOCTYPE html>   
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Araba Kiralama</title>
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
        .filter-background{
             position:relative;
            max-width: 100%;
            max-height: 700px;
            background: url('https://images.pexels.com/photos/4101555/pexels-photo-4101555.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2') no-repeat center center;
         
        }
        .filter-container {
            position: relative;
            margin: 20px auto;
            max-width: 1200px;
            padding: 95px;
            border-radius: 10px;
  
        }
        .filter {
            background: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
        }
        .filter h3 {
            flex-basis: 100%;
            text-align: center;
            margin-bottom: 25px;
            color: #3183e0;
            font-size: 1.7em;
        }
        .filter div {
            flex-basis: 45%;
            margin-bottom: 20px;
            display: flex;
            flex-direction: column;
        }
        .filter div label {
            margin-bottom: 8px;
            color: #333;
              font-size: 1.3em;
        }
        .filter div input {
            padding: 10px;
            border-radius: 6px;
            border: 1px solid #ccc;
            font-size: 1em;
        }
        .filter div select {
            padding: 10px;
            border-radius: 6px;
            border: 1px solid #ccc;
            font-size: 1em;
        }
        .filter button {
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
        .filter button:hover {
            background-color: #106db0;
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
            font-weight: bold;
              font-size: 2.5em;
        }

        .car-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr); 
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
            font-weight: bold;
            margin-bottom: 5px;
        }

        .car-features p {
            margin: 5px 0;
            font-size: 1.3em;
            font-weight: bold;
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
            font-size: 1.3em;
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
        
    </style>

    <script>
  window.onload = function() {
    const today = new Date();
    const yyyy = today.getFullYear();
    const mm = String(today.getMonth() + 1).padStart(2, '0'); 
    const dd = String(today.getDate()).padStart(2, '0');
    const formattedToday = `${yyyy}-${mm}-${dd}`;
    
    const pickupDate = document.getElementById('pickup-date');
    const returnDate = document.getElementById('return-date');
    const pickupTime = document.getElementById('pickup-time');
    const returnTime = document.getElementById('return-time');
    const pickupLocation = document.getElementById('pickup-location');
    const returnLocation = document.getElementById('return-location');
    
    pickupDate.min = formattedToday;
    returnDate.min = formattedToday;


    pickupDate.addEventListener('change', function() {
        const selectedPickupDate = new Date(pickupDate.value);
        
 
        const minReturnDate = new Date(selectedPickupDate);
        minReturnDate.setDate(selectedPickupDate.getDate() + 1);

        const minReturnYear = minReturnDate.getFullYear();
        const minReturnMonth = String(minReturnDate.getMonth() + 1).padStart(2, '0');
        const minReturnDay = String(minReturnDate.getDate()).padStart(2, '0');
        returnDate.min = `${minReturnYear}-${minReturnMonth}-${minReturnDay}`;


        const defaultReturnDate = new Date(selectedPickupDate);
        defaultReturnDate.setDate(selectedPickupDate.getDate() + 2);

        const defaultReturnYear = defaultReturnDate.getFullYear();
        const defaultReturnMonth = String(defaultReturnDate.getMonth() + 1).padStart(2, '0');
        const defaultReturnDay = String(defaultReturnDate.getDate()).padStart(2, '0');
        returnDate.value = `${defaultReturnYear}-${defaultReturnMonth}-${defaultReturnDay}`;
    });

    pickupTime.addEventListener('change', function() {
        returnTime.value = pickupTime.value;
    });


    pickupLocation.addEventListener('change', function() {
        returnLocation.value = pickupLocation.value;
    });


    function createTimeOptions(selectElement) {
        const timeOptions = [];
        for (let hour = 0; hour < 24; hour++) {
            const hourString = String(hour).padStart(2, '0');
            timeOptions.push(`${hourString}:00`, `${hourString}:30`);
        }

        timeOptions.forEach(time => {
            const option = document.createElement('option');
            option.value = time;
            option.text = time;
            selectElement.add(option);
        });
    }
    createTimeOptions(pickupTime);
    createTimeOptions(returnTime);
};



    </script>
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
    
   <div class="filter-background">
    <div class="filter-container">
        <form class="filter" method="POST" action="filter_results.php">
            <h3>Filtreleme Seçenekleri</h3>
            <div>
                <label for="pickup-date">Teslim Alınacak Tarih:</label>
                <input type="date" id="pickup-date" name="pickup_date" required>
                <label for="pickup-time">Teslim Alınacak Saat:</label>
                <input type="time" id="pickup-time" name="pickup_time" required>
            </div>
            <div>
                <label for="return-date">Teslim Edilecek Tarih:</label>
                <input type="date" id="return-date" name="return_date" required>
                <label for="return-time">Teslim Edilecek Saat:</label>
                <input type="time" id="return-time" name="return_time" required>
            </div>
            <div>
                <label for="pickup-location">Teslim Alınacak Şube:</label>
                <select id="pickup-location" name="pickup_location" required>
                    <option value="">Şube Seçin</option>
                    <?php
$sql = "SELECT CONCAT(il, ' - ', ilce) AS il_ilce FROM subeler ORDER BY il ASC, ilce ASC";
$result = mysqli_query($baglan, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    echo "<option value='" . $row['il_ilce'] . "'>" . $row['il_ilce'] . "</option>";
}
?>
                </select>
            </div>
            <div>
                <label for="return-location">Teslim Edilecek Şube:</label>
                <select id="return-location" name="return_location" required>
                    <option value="">Şube Seçin</option>
                    <?php
                        $result = mysqli_query($baglan, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<option value='" . $row['il_ilce'] . "'>" . $row['il_ilce'] . "</option>";
                        }
                    ?>
                </select>
            </div>
            <button type="submit">Araç Bul</button>
        </form>
    </div>
    <div>
     <div class="container">
        <h2>----------------En Yeni Araçlar----------------</h2>

          <?php
        include("baglanti.php");
         $sql = "SELECT * FROM araclar ORDER BY id DESC LIMIT 4";
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
