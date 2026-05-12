<?php 
$pegawai =  array("Lina","Arni","Jona","Punjabi","Marcus","Marlin"); 
echo "<strong>Sebelum diurutkan</strong><br />";
foreach ($pegawai as $data => $nama){
    echo "$data: $nama"."<br />";
}
sort($pegawai);

echo "<strong>Setelah diurutkan</strong><br />";
foreach($pegawai as $data => $nama){
    echo "$data: $nama"."<br />";
}
?>