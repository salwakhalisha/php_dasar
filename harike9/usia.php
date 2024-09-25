<?php

$usia=3;

if($usia>0 && $usia <=12){
    echo "Usia anda $usia, Anda termasuk dalam kategori anak-anak";
}

elseif($usia <=17){
    echo "Usia anda $usia, Anda termasuk dalam kategori Remaja";
}

elseif($usia <=59){
    echo "Usia anda $usia, Anda termasuk dalam kategori Dewasa";
}

else{
    echo  "Usia anda $usia, Anda termasuk dalam kategori Lansia";
}