<?php

$totalNilai=68;

if($totalNilai>=90){
    $predikat= "A";
}

elseif($totalNilai>=80){
    $predikat= "B";
}

elseif($totalNilai>=70){
    $predikat= "C";
}

elseif($totalNilai>=60){
    $predikat= "D";
}


else{
    $predikat= "E";
}

$hasil="$totalNilai:$predikat";
echo $hasil;
