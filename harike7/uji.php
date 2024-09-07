<?php

echo "<h3>Aplikasi angka dari ganjil dari 1-99</h3>";
for ($i=1;$i<=100;$i++){
    if ($i % 2 == 1){
        echo "$i <br>";
    }
}

echo "<hr>";
echo "<h3>Aplikasi angka dari 100-1</h3>";
for ($i=100;$i>=1;$i--){
    echo "$i <br>";
}