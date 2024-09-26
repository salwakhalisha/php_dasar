<?php

$nip = "198203122009042001";
$info= info_nip($nip);

function info_nip($nip)  {

    $tahun = substr($nip, 0, 4);
    $bulan = substr($nip, 4, 2);
    $hari = substr($nip, 6, 2);

 $digit_ke_15 = substr($nip, 17, 1);
 if ($digit_ke_15 == '1'){
    $jenis_kelamin = "Laki-Laki";
 }

 elseif ($digit_ke_15 == '2'){
    $jenis_kelamin = "Perempuan";
 }

 else {
    $jenis_kelamin = "Tidak diketahui";
 }
  
 $tanggal_lahir = $hari. " " . NamaBulan($bulan). " " .$tahun;
 $pensiun=$tahun + 60;

 return [
    'tanggal_lahir' => $tanggal_lahir,
    'jenis_kelamin' => $jenis_kelamin,
    'pensiun' => $pensiun
 ];

}

function NamaBulan($bulan) {
    $nama_bulan = [
        '01' => 'Januari',
        '02' => 'Februari',
        '03' => 'Maret',
        '04' => 'April',
        '05' => 'Mei',
        '06' => 'Juni',
        '07' => 'Juli',
        '08' => 'Agustus',
        '09' => 'September',
        '10' => 'Oktober',
        '11' => 'November',
        '12' => 'Desember'   
    ];

    return $nama_bulan[$bulan];
}

echo "Tanggal lahir: " . $info['tanggal_lahir'] . "\n<br>";
echo "Jenis Kelamin: " . $info['jenis_kelamin'] . "\n<br>";
echo "Pensiun: " . $info['pensiun'] . "\n<br>";

echo "<hr>";


?>

