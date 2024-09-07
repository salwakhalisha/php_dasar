<?php

//Buatlah aplikasi untuk menentukan bilangan genap atau ganjil

//Algoritma
//1. Inisialisasi variabel bilangan
//2. Modulus bilangan dengan dua
//3. Jika hasil modulus sama dengan 0 maka bilangan genap
//4. Jika tidak maka bilangan ganjil

$bilangan=69;

$hasil=$bilangan%2;

if($hasil==0){
    echo "bilangan genap<br>";
}

else{
    echo "bilangan ganjil";
}