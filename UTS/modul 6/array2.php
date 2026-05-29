<?php 
$array1 =  array("Arman","Bayu","Feri"); echo "Array awal ialah :<br />";
for ($i=0; $i<count($array1); $i++){
    echo "Data ke- ", $i, " : ",$array1[$i],"<br/>";
}
echo "<br/>Setelah ditambahkan \"herni, Gita & Dewi\" menggunakan funngsi array_push():<br/>";
array_push($array1,"Herni","Gita","Dewi"); 
for ($i=0; $i<count($array1); $i++){
    echo "Data ke- ", $i, " : ",$array1[$i],"<br/>";
}
echo "<br/>Setelah bagian awal array dihapus menggunakan funngsi array_shift():<br/>";
array_shift($array1); 
for ($i=0; $i<count($array1); $i++){
    echo "Data ke- ", $i, " : ",$array1[$i],"<br/>";
}
echo "<br/>Dan Setelah isi array diurutkan menggunakan funngsi sort():<br/>";
sort($array1); 
for ($i=0; $i<count($array1); $i++){
    echo "Data ke- ", $i, " : ",$array1[$i],"<br/>";
}
?>