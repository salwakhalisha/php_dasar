<?php

// Jumlah jam kerja normal adalah 48
// Jika jam kerja melebihi maka akan di anggap lembur
// Upah untuk jam kerja normal adalah 2000 per jam
// Jika melebihi 48 jam maka jam selanjutnya akan lembur dengan
// 3000 perjamnya


$jumlahjamkerja=60;

if($jumlahjamkerja<=48 && $jumlahjamkerja>0){
    $upahlembur=2000*$jumlahjamkerja;
}

elseif($jumlahjamkerja>48 ){
    $upahlembur=($jumlahjamkerja-48)*3000+(2000*48);
}

else{
    $upahlembur=0;
}

$upahmingguan=$upahlembur;
echo $upahmingguan;