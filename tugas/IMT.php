<?php

$IMT=27;

if($IMT<18.5){
    $keterangan="Kurus";
}

elseif($IMT<25){
    $keterangan="Normal";
}

elseif($IMT<30){
    $keterangan="Overweight";
}

else{
    $keterangan="Obesitas";
}

$kategori="$IMT:$keterangan";
echo $kategori;















