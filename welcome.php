<?php
// Periksa apakah pengguna sudah login
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: index.php'); // Redirect kembali ke halaman login jika belum login
    exit();
}

// Ambil nama pengguna dari session
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="welcome-container">
            <h2>Selamat Datang, <?php echo $username; ?>!</h2>
            <p>Ini adalah halaman WEB CLOUD RAIHAN</p>
            <!-- Tambahkan kotak link untuk "Cloud 1" -->
            <div class="cloud-link">
                <a href="https://drive.google.com/drive/folders/1KU5PRMR_IlRlx2eeGkspH4AFJq5PSp_Q?usp=drive_link">Cloud 1</a>
            </div>
            <br><br>
            <a href="logout.php">Logout</a>
        </div>
    </div>
    <script>
        // Tambahkan script untuk mengalihkan halaman setelah beberapa detik
        setTimeout(function() {
            window.location.href = "new_page.php"; // Ganti "new_page.php" dengan halaman yang diinginkan
        }, 5000); // Ubah angka 5000 menjadi jumlah milidetik yang diinginkan
    </script>
</body>
</html>
