<?php
$nama = $_POST['nama'];
$tempat = $_POST['tempat'];
$tgl = $_POST['tgl'];
$JK = $_POST['JK'];
$agama = $_POST['agama'];
$alamat = $_POST['alamat'];
$dir = "image/";
$upload = $dir.$_FILES['file']['name'];
echo "Nama : ". $nama. "<br>";
echo "Tempat Lahir : ". $tempat. "<br>";
echo "Tanggal Lahir  : ". $tgl. "<br>";
echo "Jenis Kelamin : ". $JK. "<br>";
echo "Agama : ". $agama. "<br>";
echo "Hobi : <br>";
if(isset($_POST['Hobi1'])){
    echo "-" .  $_POST['Hobi1']. "<br>";
}
if(isset($_POST['Hobi2'])){
    echo "-" .  $_POST['Hobi2']. "<br>";
}
if(isset($_POST['Hobi3'])){
    echo "-" .  $_POST['Hobi3']. "<br>";
}
if(isset($_POST['Hobi4'])){
    echo "-" .  $_POST['Hobi4']. "<br>";
}
if(is_uploaded_file($_FILES['file']['tmp_name'])){
    $kirim = move_uploaded_file($_FILES['file']['tmp_name'],$upload);
    if($kirim){
        echo "File berhasil diupload ke server pada folder <b>$upload</b>";
    }else{
        echo "File gagal diupload";
        echo "error : ", $_FILES['file']['error'];
    }
    
}
?>