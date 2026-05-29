<?php
$username = $_POST['username'];
$password = $_POST['password'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    // Kondisi pengecekan login
    if ($username === "Triani" && $password === "12345678") {
        header("Location: index.php");
        exit(); 
        
    } else {
        echo "<h2>Login Gagal!</h2>";
        echo "Nama atau Password yang Anda masukkan salah.<br><br>";
        echo "<a href='javascript:history.back()'>Kembali ke Halaman Login</a>";
    }
} else {
    echo "Akses ditolak.";
}
?>