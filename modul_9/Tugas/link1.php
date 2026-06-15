<?php
session_start();
// Proteksi Penyusup
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Halaman Utama</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; margin: 20px; }
        .container { border: 2px solid #000; width: 500px; margin: 0 auto; }
        .title { border-bottom: 2px solid #000; padding: 15px; font-weight: bold; background-color: #f4f4f4; }
        .content { padding: 30px; min-height: 150px; }
        .footer { border-top: 2px solid #000; padding: 10px; background-color: #f4f4f4; }
        .nav { margin-bottom: 20px; border-bottom: 1px solid #ccc; padding-bottom: 10px; }
        .nav a { margin: 0 10px; text-decoration: none; color: blue; }
    </style>
</head>
<body>

<div class="container">
    <div class="title">
        Title <br>
        Username: <?php echo htmlspecialchars($_SESSION['username']); ?>
    </div>
    
    <div class="content">
        <div class="nav">
            <a href="link1.php">Link 1</a> | 
            <a href="link2.php">Link 2</a> | 
            <a href="link3.php">Link 3</a> | 
            <a href="logout.php" style="color: red; font-weight: bold;">Logout</a>
        </div>

        <p>Anda telah berhasil login</p>
        <p>Ini adalah isi dari link 1</p>
    </div>
    
    <div class="footer">
        Footer
    </div>
</div>

</body>
</html>