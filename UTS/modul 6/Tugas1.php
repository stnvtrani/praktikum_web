<?php
$stok_produk = [
    "Kursi"   => 15,
    "Meja"    => 50,
    "Lemari" => 30,
    "Pintu"  => 10,
    "Jendela"  => 5
];
echo "<b>Sebelum diurutkan:</b><br>";
foreach ($stok_produk as $nama => $jumlah) {
    echo "$nama: $jumlah"."<br />";
}

echo "<h2>1. Fungsi Pengurutan Array</h2>";

ksort($stok_produk);
echo "<b>Urut Nama A-Z (ksort):</b><br>";
foreach ($stok_produk as $nama => $jumlah) {
    echo "$nama: $jumlah"."<br />";
}

echo "<br><br>";

arsort($stok_produk);
echo "<b>Urut Stok Terbanyak (arsort):</b><br>";
foreach ($stok_produk as $nama => $jumlah) {
   echo "$nama: $jumlah"."<br />";
}

echo "<br><br>";

asort($stok_produk);
echo "<b>Urut Stok Tersedikit (asort) :</b><br>";
foreach ($stok_produk as $nama => $jumlah) {
    echo "$nama: $jumlah"."<br />";
}

echo "<br><br>";

rsort($stok_produk);
echo "<b>Urut Stok indeks Terbanyak (rsort):</b><br>";
foreach ($stok_produk as $nama => $jumlah) {
   echo "$nama: $jumlah"."<br />";
}
echo "<br><br>";

krsort($stok_produk);
echo "<b>Urut Stok indeks Tersedikit(krsort):</b><br>";
foreach ($stok_produk as $nama => $jumlah) {
   echo "$nama: $jumlah"."<br />";
}
echo "<hr>";

?>