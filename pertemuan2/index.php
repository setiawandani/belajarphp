<?php
// function -> program di dalam program 

// 1. bulit- in function => fungsi yang tersedia di php
// 2. user defined function -> fngsi yang dabuat oleh program 

//date, time, mktime, strtotime

// date -> ntanggal

date_default_timezone_set("asia/Jakarta");
echo date ("l, j F Y H:i:s");

/*
 i -> nama  hri yang lengkap
 d -> hari format 01 sampai 31
 j -> hrari format 1 sampai 31
 M -> bulan format 3 karakter (jan, feb, mar,...)
 F -> nama bulan lengkap
 Y -> tahun

 H ->jam 
 i -> menit
 s -> detik
 */

 // time = jumlah detik sejak 1 januari 1970
 // echo time();
 // mktime
 //date_default_timezone_set("asia/Jakarta");
 //echo mktime(0,0,0,10,8,2004); // jumlah detikdari 1 januari 1978 - tgl yang di tentukan

 // strtotime --> mengubah sting
 echo strtotime("24 april 2024");

 //date_parse -> memecah tanggal
 print_r(date_parse("2024-04-24"));
?>