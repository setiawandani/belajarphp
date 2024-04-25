<?php
// aray 
$arr = array (1,23,4,7,9,11,30);

print_r($arr);
print "<br>";

// cara baru bikinarray di php 
$arr2 = ["Maulana", "candra", "naufal"];
print_r($arr2);
print "<br>";
var_dump($arr2);
print "<br>";
echo $arr2[2];

// menambah isi array
$arr2[3] = "jabar";

// menambh isi array
$arr2[4] = "Naufal";
print "<br>";

//menambhakan isi array
$arr2[] = "saeful";
print_r($arr2);

// foreach
foreach($arr2 as $a){
    echo $a, "<br>";
}
?>