<?php
// built in functtion untuk manipulasi sting

// explode, implode, strlen, strcmp
// strlen => menegtahui panjang string
echo strlen("Hello world");
echo"<br>";
echo strlen(" Selamat datang  di BLK karawang "),"<br>";

//str_word_count => menghitung jumlah katakatak2
echo str_word_count("dihari minggu laut selalu bekumpul diteras depan rumah bersama keluuraga
                    untuk memakan gulai buatan ibunya"),"<br>";

// strcmp => membandingkan 2 buah string/kata
$kata1 = "Katak";
$kata2 = "katak";
if(strcmp($kata1, $kata2) !== 0 ){
    echo "$kata1 tidak sama dengan $kata2";
}else{
    echo "$kata1 sama dengan $kata2";
}
echo"<br>";
//explode => memecah string
print_r(explode("-", "Tempe-Bacem", 0));
echo "<br>";
print_r(explode(",", "taopik, faisal, rian"));
echo "<br>";

// implode = menggabungkan array menjadi string
$str = array("selamat", "Datang", "di",  "pemrograman");
echo implode(" ", $str), "<br>";

// strtolower => merubah huruf besar menjadi huruf kecil
echo strtolower("selamat  menikmati hidangan makanan"),"<br>";

// strtoupper => merubah huruf kecil menjadi hurup besar
echo strtoupper ("Ada udang di balik batu");

// substr => mengambil beberapa karakter di dalam string
$kata3 = "pelatihan";
echo substr($kata3, 2, 5);

?>