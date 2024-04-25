<?php
$mhs = [
    [
        "prodi" => "informatika",
        "nim" => "32416255201204",
        "nama" => "Akbar",
        "alamat" => "Cikampek"

    ],
    [
        "prodi" => "infomatika",
        "nim" => "32416255201138",
        "nama" => "fajar",
        "alamat" => "telagasari"

    ],
    [
        "prodi" => "informatika",
        "nim" => "22416255201165",
        "nama" => "Bisma",
        "alamat" => "Isekai"

    ],
    [
        "prodi" => "informatika",
        "nim" => "32416255201153",
        "nama" => "putra",
        "alamat" => "purwasari"

    ],
    [
        "prodi" => "informatika",
        "nim" => "2485520678956",
        "nama" => "Fahri",
        "alamat" => "Telagasari"

    ]

];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
 
    <table border="2px" align= "center">
    <tr>
        <th>NIM</th>
        <th>NAMA</th>
        <th>ALAMAT</th>
        <th>PRODI</th>
    </tr>
    <?php foreach($mhs as $a ): ?>
        <tr>
         
            <td><?php echo $a ["nim"]?></td>
            <td><?php echo $a ["nama"]?></td>
            <td><?php echo $a ["alamat"]?></td>
            <td><?php echo $a ["prodi"]?></td>
            
        </tr>
        <?php endforeach?>
    </table>
</body>
</html>