<?php
// Membuat array mahasiswa
$mahasiswa = array(
    "nama" => "Budiono siregar",
    "citacita"=> "Kapal Laut",
    "jurusan" => "Informatika",
    "nilai" => array(29, 15, 25),
    "alamat" => array(
        "jalan" => "Jl. Suparno pecel",
        "kota" => "Salatiga"
    )
);

// Mengubah array mahasiswa menjadi JSON
$mahasiswaJSON = json_encode($mahasiswa, JSON_PRETTY_PRINT);

// Menampilkan hasil
echo $mahasiswaJSON;
?>