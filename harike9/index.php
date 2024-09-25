<?php

//terdapat sebuah array dengan data seperti berikut
//$angka=array(7,5,9,12,4,54,76,98)
//tampilkan data array yang memiliki data bilangan ganjil!

$angka=array(7,5,9,12,4,54,76,98);

foreach($angka as $bilangan){
    if($bilangan%2==1){
        echo $bilangan. '<br>';
    }
}

echo "<hr>";
echo "<br>";

//soal berikutnya, jumlahkan seluruh data array tersebut, simpan ke dalam variable $jumlah

$angka=array(7,5,9,12,4,54,76,98);

$angka=array_sum($angka);
echo "Jumlah seluruh data tersebut adalah $angka";


echo "<hr>";
echo "<br>";

//cara lain menjumlahkan data

$jumlah=0;
$angka=array(7,5,9,12,4,54,76,98);

foreach($angka as $bil){
    $jumlah=$jumlah+$bil;
}

echo $jumlah;

echo "<hr>";
echo "<br>";

//urutkan dari angka terkecil sampai terbesar
$angka=array(7,5,9,12,4,54,76,98);
asort($angka);

foreach($angka as $as){
   echo $as.  '<br>';
}
