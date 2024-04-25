<?php
// PHP di dalam HTMP
// cara membuat variabel di PHP
// keyword : const, let, var
// variabel $
// scopr = cangkupan
// variabel global && variabel local 
//variabel global = variabel yang bisa di akses di,ama saja
// variabel local = variabel ayang hanya bisa  di akses di bagian tertentu
$angka = 20 ;

echo $angka;

$nama ="dani doang";
// gaboleh pake spasi
// gaboleh diawali nomor
//kalos mau pake spasi, pakai tanda (_)

$nama_depan = "budi";
$nama_belakang = "utomo";
//concatenation -> menggabungkan string
echo $nama_depan . " " . $nama_belakang ;


// operator aritmatika = +, -, * /,%
// operator assignment = ==, +=, -=, *=,
// operator perbandingan <, >, <=, >=,
// ==, !=, ===, !==
//operator logika = &&, ||, 

// tipe data = integer, float, string, boolean,
var_dump(1=== "1");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>belajar PHP dasar</title>
</head>
<body>
    <h1><?php echo "Selamat datang $nama";?></h1>
</body>
</html>