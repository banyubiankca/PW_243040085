<?php

$mahasiswa = [
    [
        "nama" => "Banyu Biankca",
        "nrp" => "243040085",
        "email" => "banyuu@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Teguh Albab",
        "nrp" => "243040003",
        "email" => "guh@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Reza Fauzan",
        "nrp" => "243040027",
        "email" => "zann@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Aqmal bob",
        "nrp" => "243040020",
        "email" => "bombom@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Nopan Dwi",
        "nrp" => "243040017",
        "email" => "opann@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Asep Saepuloh",
        "nrp" => "243040033",
        "email" => "sepkasep@gmail.com",
        "jurusan" => "Teknik Industri"
    ],
    [
        "nama" => "Nining Ningsih",
        "nrp" => "243040092",
        "email" => "Ningsih@gmail.com",
        "jurusan" => "Teknik Pangan"
    ],
    [
        "nama" => "Kokom Komalasari",
        "nrp" => "243040022",
        "email" => "komala@gmail.com",
        "jurusan" => "Teknik Lingkungan"
    ],
    [
        "nama" => "Udin Didin",
        "nrp" => "243040011",
        "email" => "didin@gmail.com",
        "jurusan" => "Teknik Mesin",
    ],
    [
        "nama" => "Saripudin",
        "nrp" => "243040079",
        "email" => "sarip@gmail.com",
        "jurusan" => "Teknik Informatika",
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ( $mahasiswa as $mhs ) : ?>
        <ul>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NRP : <?= $mhs["nrp"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>