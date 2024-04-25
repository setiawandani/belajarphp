<?php
$kata1 = "INDOMIE";
echo substr($kata1, 0, 3), " - 001","<br>";

$kata2 = "LIFEBOUY";
echo substr($kata2, 0, 3), " - 002","<br>";

$kata3 = "SARIMIE";
echo substr($kata3, 0, 3), " - 003","<br>";

$kata4 = "INDOMILK";
echo substr($kata4, 0, 4), " - 004","<br>";

$kata5 = "FLORIDINA";
echo substr($kata5, 0, 3), " - 005","<br>";

$kata6 = "FRUTANG";
echo substr($kata6, 0, 3), " - 006", "<br>";


/*
function namafungsi($param1, $param2, $param3,...)
*/

// camelcasedigunakan class => oop
//penjumlahan => biasany 
function penjumlahan($a,$b)
{   
 return $a +$b;
}
function luasegitiga($($alas, $tingi)){
    return 0,5 *$tinggi;
}

echo penjumlahan(4,3);
$alas = 4;
$tinggi = 5; 
echo " luas segitiga dengan panjang  $alas dan $tinggi adalah " , luasegitiga($parma1 = "", $parma2 = "");

//conntoh function parameter default
function sapa($waktu = "" &&, $nama = "")
{
    if ($waktu == && $nama === "" ){
        return " selamat siamh, dunia";
    }else{
        return "selamat $waktu,$nama $"
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <hecho1><?php echo saya(malam)
</body>
</html>
