<?php
// Sesuaikan dengan detail database Anda
$host = "localhost";
$username = "root";
$password = "";
$database = "mydatabase";

// Buat koneksi ke database
$conn = new mysqli($host, $username, $password, $database);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari form login
$username = $_POST['username'];
$password = $_POST['password'];

// Lakukan query untuk mencari user
$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = $conn->query($query);

// Cek apakah user ditemukan
if ($result->num_rows > 0) {
    // Mulai session dan simpan username
    session_start();
    $_SESSION['username'] = $username;

    // Redirect ke halaman selamat datang dengan nama pengguna
    header('Location: welcome.php');
} else {
    echo "Login gagal. Periksa kembali username dan password Anda.";
}

// Tutup koneksi
$conn->close();
?>
