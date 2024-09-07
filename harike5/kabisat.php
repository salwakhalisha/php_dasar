<?php
 
$year=2036;

function tahunkabisat(int $year){
    if ($year % 400 == 0)
        return  true;

    elseif($year % 100 == 0)
        return false;

    elseif($year % 4 == 0)
        return true;
}
    
    $result= tahunkabisat($year);

    if ($result)
        echo "Tahun $year adalah tahun kabisat<br>";
    else  
        echo "Tahun $year bukan tahun kabisat";

