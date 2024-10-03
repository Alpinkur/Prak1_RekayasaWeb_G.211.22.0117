<?php
// Variabel JSON
$jsonData = '{
    "nama": "Budiono siregar",
    "nim": "lupa",
    "jurusan": "Informatika",
    "nilai": [29, 15, 25],
    "alamat": {
        "jalan": "Jl. Suparno Pecel",
        "kota": "Salatiga"
    }
}';

// Decode JSON menjadi PHP Object
$mahasiswaObject = json_decode($jsonData);

// Decode JSON menjadi PHP Array
$mahasiswaArray = json_decode($jsonData, true);

// Mengakses nilai dari PHP Object
echo "Mengakses menggunakan PHP Object:\n";
echo "Nama: " . $mahasiswaObject->nama . "\n";
echo "NIM: " . $mahasiswaObject->nim . "\n";
echo "Jurusan: " . $mahasiswaObject->jurusan . "\n";
echo "Nilai: " . implode(", ", $mahasiswaObject->nilai) . "\n";
echo "Alamat: " . $mahasiswaObject->alamat->jalan . ", " . $mahasiswaObject->alamat->kota . "\n\n";

// Mengakses nilai dari PHP Array
echo "Mengakses menggunakan PHP Array:\n";
echo "Nama: " . $mahasiswaArray['nama'] . "\n";
echo "NIM: " . $mahasiswaArray['nim'] . "\n";
echo "Jurusan: " . $mahasiswaArray['jurusan'] . "\n";
echo "Nilai: " . implode(", ", $mahasiswaArray['nilai']) . "\n";
echo "Alamat: " . $mahasiswaArray['alamat']['jalan'] . ", " . $mahasiswaArray['alamat']['kota'] . "\n";
?>