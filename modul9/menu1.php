<?php
session_start();
if( (isset($_GET['aksi'])) and ($_GET['aksi']=="logout")){
session_destroy();
header("Refresh: 3; proses_radio.php");
exit(); 
}
if(isset($_SESSION['login'])){
    $nama = $_SESSION['username'];
    echo "<center>";
    echo"<p><h1> Ini Halaman Pertama</h1></p>";
    echo "<p>Anda Login sebagai <b>".$nama."</b></p>";
    echo "<p>Berikut ini menu navigasi anda</p>";
    echo "<p><a href='menu1.php'>Menu 1</a> &nbsp; <a href='menu2.php'>Menu 2</a> &nbsp; <a href='menu3.php'>Menu 3</a></p>";
?>
<a href="?aksi=logout">Logout</a>
</center>
<?php
}else{
    header("location:proses_login.php");
}
?>