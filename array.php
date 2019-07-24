<?php

$sayur = array('bayam','kangkung','kol');

// menampilkan seluruh array
print_r($sayur); // jika echo $sayur; yg muncul 'array'
// menampilkan isi array dr index (dimulai dr 0)
echo $sayur[0];
// menambah elemen array setelahnya.
$sayur[3]='lobak';
$sayur[1]='wortel'; //Jika diisi pd index yg sama, elemen yg lama akan ketimpa
print_r($sayur);

// nested array: array dlm array
$mamalia = array('kucing','tikus','anjing');
$unggas = array('ayam','itik','burung');
$ikan = array('salmon','paus');

$hewan = array($mamalia,$unggas,$ikan);
print_r($hewan);

// menghitung panjang array
echo count($mamalia),'\n';
echo count($hewan);
echo count($hewan,2); // khusus nested array ?

// foreach bersarang: menampilkan semua elemen array
$hewan1 = array('mamalia' => $mamalia,
'unggas' => $unggas,
'ikan' => $ikan); 

foreach($hewan1 as $jenis){
    foreach($jenis as $nama){
        echo $nama . ", ";
    }
    echo " \n";
}