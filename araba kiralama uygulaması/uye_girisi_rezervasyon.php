<?php 
session_start();
include("baglanti.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $pickupDate = isset($_POST['pickup_date']) ? $_POST['pickup_date'] : null;
    $pickupTime = isset($_POST['pickup_time']) ? $_POST['pickup_time'] : null;
    $returnDate = isset($_POST['return_date']) ? $_POST['return_date'] : null;
    $returnTime = isset($_POST['return_time']) ? $_POST['return_time'] : null;

    $pickupLocation = isset($_POST['pickup_location']) ? $_POST['pickup_location'] : null;
    $returnLocation = isset($_POST['return_location']) ? $_POST['return_location'] : null;

    // Prepare the SQL statement to prevent SQL injection
    $sql = "SELECT * FROM musteriler WHERE email = ? AND sifre = ?";
    $stmt = mysqli_prepare($baglan, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $email, $password);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    
    // Validate pickup location
    if ($pickupLocation !== null && strpos($pickupLocation, " - ") !== false) {
        list($pickupCity, $pickupDistrict) = explode(" - ", $pickupLocation);
    } else {
        $pickupCity = null;
        $pickupDistrict = null;
    }

    // Validate return location
    if ($returnLocation !== null && strpos($returnLocation, " - ") !== false) {
        list($returnCity, $returnDistrict) = explode(" - ", $returnLocation);
    } else {
        $returnCity = null;
        $returnDistrict = null;
    }
    
    // Check if the user exists
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['musteri_id'] = $row['id'];
        
        // Set session variables after successful login
        $_SESSION['pickup_date'] = $pickupDate;
        $_SESSION['pickup_time'] = $pickupTime;
        $_SESSION['return_date'] = $returnDate;
        $_SESSION['return_time'] = $returnTime;
        $_SESSION['pickup_city'] = $pickupCity;
        $_SESSION['pickup_district'] = $pickupDistrict;
        $_SESSION['return_city'] = $returnCity;
        $_SESSION['return_district'] = $returnDistrict;

        // Redirect to the reservation form
        header("Location: rezervasyon_formu_uye.php");
        exit();
    } else {
        $error_message = "E-posta veya şifre hatalı.";
    }

    // Close the statement
    mysqli_stmt_close($stmt);
}
?>
