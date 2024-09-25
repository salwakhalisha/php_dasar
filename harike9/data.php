<?php


//Buatlah sebuah array dengan data seperti berikut!
//Nama	| NISN
//Andi	| 67345345
//Budi	| 76245345
//Candra| 89345345

$data = array(
        array("nama"=>"Andi","NISN"=>"67345345"),
        array("nama"=>"Budi","NISN"=>"76245345"),
        array("nama"=>"Candra","NISN"=>"89345345"),
);
foreach($data as $n){
    echo $n ['nama']. "-" .$n ['NISN']."<br>";
}

echo "<br>";
$dataSiswa=array(array( "nama"=>"Andi","nisn"=>"67345345"),
                                array( "nama"=>"Budi","nisn"=>"76245345"),
                                array( "nama"=>"Candra","nisn"=>"89345345"));

// var_dump($dataSiswa);
foreach($dataSiswa as $dt){
    echo $dt['nama']."-".$dt['nisn']."<br>";
}