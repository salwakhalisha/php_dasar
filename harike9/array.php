<?php

//index  array
echo "Index array: menampilkan salah satu data<br><br>";

$nama=array("Andi","Budi","Candra","Dedi","Emon");
echo $nama[3]; //mengakses elemen 3 dimulai dari 0

echo "<hr>";
echo "Index array: menampilkan semua data<br><br>";

$nama=array("Andi","Budi","Candra","Dedi","Emon");
foreach($nama as $n){//menampilkan semua data
    echo $n.'<br>';
}


echo "<hr>";
echo "Index array: merubah  data<br><br>";

$nama=array("Andi","Budi","Candra","Dedi","Emon");
$nama [4]="salwa";//mengubah elemen atau data 
foreach($nama as $n){
    echo $n.'<br>';
}

echo "<hr>";;
echo "Index array: menghapus data  <br><br>";

$nama=array("Andi","Budi","Candra","Dedi","Emon");
unset($nama[1]); //menghapus data array indeks-1
foreach ($nama as $n) {
    echo $n.'<br>';
    }
    

echo "<hr>";
// Associative array 
echo "Associative array <br><br>";

$car = array("brand"=>"Lamborghini", 
            "model"=>"Aventador", 
            "year"=>1964);


echo $car["model"];//memanggil dengan label
echo "<br>";

echo $car["year"]=2024;//mengubah data 

echo "<hr>";
//menambahkan array
echo "Associative array: menambahkan data <br><br>";

$car = array("car1"=>"ferrari","car2"=>"Mercedes","car3"=>"Range Rover");
$car["car4"] ="Lamborghini";
foreach($car as $n){
    echo $n.'<br>';
}

echo "<hr>";

echo "Associative array: menghapus data <br><br>";

$car = array("car1"=>"ferrari","car2"=>"Mercedes","car3"=>"Range Rover");
unset($car["car1"]);//menghapus data
foreach($car as $n){
    echo $n.'<br>';
}

echo "<hr>";

echo "Assosiative array: merubah data<br><br>";

$car=array("car1"=>"ferrari","car2"=>"Mercedes","car3"=>"Range Rover");

$car["car2"]="Audi";//merubah data

foreach($car as $n){
    echo $n.'<br>';
}

