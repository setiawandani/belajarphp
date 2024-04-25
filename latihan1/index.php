<?php
/*
function hariBerikutnya($hariAwal, $jumlahHari) {
    // Mendapatkan timestamp dari hari saat ini dan menambahkannya dengan jumlah hari
    $timestamp = strtotime("$jumlahHari days", strtotime($hariAwal));

    // Mendapatkan hari dalam bahasa Inggris
    $hariInggris = date('l', $timestamp);

    // Menerjemahkan hari ke bahasa Indonesia menggunakan switch
    switch ($hariInggris) {
        case 'Sunday':
            $hariIndonesia = 'Minggu';
            break;
        case 'Monday':
            $hariIndonesia = 'Senin';
            break;
        case 'Tuesday':
            $hariIndonesia = 'Selasa';
            break;
        case 'Wednesday':
            $hariIndonesia = 'Rabu';
            break;
        case 'Thursday':
            $hariIndonesia = 'Kamis';
            break;
        case 'Friday':
            $hariIndonesia = 'Jumat';
            break;
        case 'Saturday':
            $hariIndonesia = 'Sabtu';
            break;
        default:
            $hariIndonesia = 'Hari tidak diketahui'; // Menangani kasus tidak terduga
            break;
    }

    // Mengembalikan hari dalam bahasa Indonesia
        

// Contoh pemanggilan fungsi
$hariIni = '2023-04-26'; // Misalnya hari ini tanggal 26 April 2023
$hariKemudian = hariBerikutnya($hariIni, 100); // 100 hari setelah hari ini
echo "hasil dari 100 hari $hariIni adalah hari $hariKemudian.";
*/
function menghitunghari ($jumlahari){

$namahari = date ('l', strtotime (date("Y-m-d"). "+". $jumlahhari."days "));

    switch ($namahari){
        case 'monday':
             $tranlatehari = "senin";
             break;

        case 'tuesday':
             $tranlatehari = "selasa";
             break;
    
        case 'wednesday':
             $tranlatehari = "rabu";
              break;
    
        case 'thrusday':
              $tranlatehari = "kamis";
             break;
    
        case 'friday':
              $tranlatehari = "jumat";
              break;

        case 'saturday':
               $tranlatehari = "sabtu";
               break;
    
        case 'sunday':
             $tranlatehari = "minggu";
             break;
        default:
        $tranlatehari = "namahari tidak valid";
    }
}
    $jumlahhari = 120;

    echo " $jumlahhari hari seteleh hari ini adalah hari " . menghitunghari($jumlahhari);


?>
