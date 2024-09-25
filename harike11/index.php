<?php

echo "1. function tanpa argumen<br><br>";

function lirik(){
    echo "  I'll love you 'til the day that I die<br>
            'Til the day that I die<br>
            'Til the light leaves my eyes<br>
            'Til the day that I die
            <h4>PAHAM</h4>";
        
        
    echo "<br>";

    
}

lirik();


echo "<hr>";

echo "2. function dengan 3 argumen <br><br>";

function makanan($nama,$harga,$harga2) {
    echo "Harga makanan $nama ini, berkisar antara $harga - $harga2. <br>";
}

makanan("Dimsum","Rp60.000","Rp80.000");
makanan("Soft Cookies", "Rp14.000","Rp25.000");
makanan("Bomboloni","Rp15.000","Rp21.000");

echo "<hr>";


echo "3. function yang mengembalikan nilai<br><br>";

function jumlahkan($bil1,$bil2,$bil3){
    return $bil1+$bil2+$bil3;
}

echo jumlahkan(2,6,4). "<br>";
echo jumlahkan(5,6,9). "<br>";
echo jumlahkan(8,3,7). "<br>";