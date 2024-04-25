<?php
// Percabangan
// if
// if else
// if else .. if else
// switch
$angka = 20 ;
if($angka % 2 === 0){
    echo "ini bilangan genap";
}else{
    echo "$angka merupakan bilangan ganjil";
}

// if else.. if else.. 
echo "<br>";
$nilai = 78;
if ($nilai > 85){
    echo " Index nilai anda adalah A";
}else if ($nilai > 75 && $nilai <= 85){
    echo " Index nilai anda adalah B";
}else if ($nilai >60 && $nilai<=75){
    echo " Index nilai anda adalah c";
}else if ($nilai >45 && $nilai <= 60){
    echo " Index nilai anda adalah D ";
}else{
    echo " Index nilai anda adalah E ";
}
print "<br>";
// switch case

$nilai = 90;
switch ($nilai){
    case ($nilai > 85):
        echo "index nilai anda adalah A";
         break;
    case ($nilai >75 && $nilai <= 85 ):
        echo "index nila anda adalah B";
         break;
    case ($nilai >60 && $nilai <= 75 ):
        echo "index nila anda adalah C";
        break;
    case ($nilai >45 && $nilai <= 60 ):
         echo "index nila anda adalah D";
         break;
    case ($nilai >45 ):
          echo "index nila anda adalah E";
         break;
    default:
        echo " Nilai yang Anda input tidak valid";
         break;
}
?>