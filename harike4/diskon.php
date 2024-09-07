<?php

//buatlah aplikasi untuk menentukkan diskon dengan ketentuan jika totalBelanja lebih dari 100k maka akanmendapatkan diskon sebesar 5 %. Jika totalBelanjalebih dari 200k maka akan mendapatkan diskon sebesar 10%.Tentukan totalBayar setelah dikurangi diskon.

//Algoritma
//1. inisialisasi variabel totalBelanja
//2. inisialisasi variabel diskon
//3. jika totalBelanja lebih dari 200k maka diskon 10%
//4. jika totalBelanja lebih dari 100k maka diskon 5%
//5. Jika tidak maka diskon 0%

$totalBelanja=150000;
$diskon=0;

if($totalBelanja>200000){
    $diskon=0.1;
}

elseif($totalBelanja>100000){
    $diskon=0.05;
}

else{
    $diskon=0;
}

$potonganHarga=$totalBelanja*$diskon;
$totalBayar=$totalBelanja-$potonganHarga;

echo $totalBayar;