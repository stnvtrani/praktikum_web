<?php
$c = 2;
$total = 0;
while ($c <= 50){
    $sebelum = $total;
    $total = $total + $c;
    echo "$sebelum + $c = $total <br>";
    $c++;
}
?>