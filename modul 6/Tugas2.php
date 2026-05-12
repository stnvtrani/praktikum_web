<?php
$stok_produk = [
    "Kursi"   => 15,
    "Meja"    => 50,
    "Lemari" => 30,
    "Pintu"  => 10,
    "Jendela"  => 5
];
echo "<b>Daftar Barang:</b><br>";
foreach ($stok_produk as $nama => $jumlah) {
    echo "$nama: $jumlah"."<br />";
}

echo "<br><br>";

$jenis = count($stok_produk);
echo "1. Total jenis barang: $jenis<br>";
foreach ($stok_produk as $nama => $jumlah) {
    echo "$nama: $jumlah"."<br />";
}

echo "<br><br>";

$terhapus = array_shift($stok_produk); 
echo "2. Menggunakan array_shift (Menghapus elemen pertama):<br>";
foreach ($stok_produk as $nama => $jumlah) {
    echo "$nama: $jumlah <br>";
}

echo "<br>";


array_push($stok_produk, 200); 
echo "3. Menggunakan array_push (Menambah elemen terakhir):<br>";
foreach ($stok_produk as $nama => $jumlah) {
    echo "$nama: $jumlah <br>";
}

echo "<br>";


$produk_tambahan = ["Kaca" => 12, "Kayu" => 20];
$stok_produk = array_merge($stok_produk, $produk_tambahan);
echo "4. Menggunakan array_merge (Menambah Kaca & kayu):<br>";
foreach ($stok_produk as $nama => $jumlah) {
    echo "$nama: $jumlah <br>";
}

echo "<br>";

echo "<br><br>";
?>