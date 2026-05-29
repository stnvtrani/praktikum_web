<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Form</title>
</head>
<body>
<form enctype="multipart/form-data" action= "simpan.php" method="post">
    Nama : <input type="text" name="nama"><br><br>
    tempat: <input type="text" name="tempat"><br><br>
    Tanggal Lahir : <input type="date" name="tgl"><br>
    Jenis Kelamin : <br><input type="radio" name="JK" value = "Laki-laki"> Laki-laki <br>
    <input type="radio" name="JK" value = "Perempuan"> Perempuan <br>
    Agama :<select name ="agama">
        <option value="Islam">Islam</option>
        <option value="Kristen">Kristen</option>
        <option value="Budha">Budha</option>
</select><br><br>
alamat : <textarea name="alamat" id=""></textarea><br><br>
Hobi : <br>
<input type="checkbox" name="Hobi1" id="" value="Bernyanyi"> Bernyanyi <br>
<input type="checkbox" name="Hobi2" id="" value="Memasak"> Memasak <br>
<input type="checkbox" name="Hobi3" id="" value="Menulis"> Menulis <br>
<input type="checkbox" name="Hobi4" id="" value="Lainnya"> Lainnya <br>
Masukkan Foto : <input type ="file" name="file"><br><br>
<input type="submit" value="Kirim">
</form>
</body>
</html>