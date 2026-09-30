<?php

$nama = "Satria";
$kelas = "XII RPL 3";
$nilaiTugas = 85;
$nilaiUTS = 80;
$nilaiUAS = 90;

$nilaiAkhir = ($nilaiTugas * 30 / 100) + ($nilaiUTS * 30 / 100) + ($nilaiUAS * 40 / 100);


if ($nilaiAkhir >= 90) {
    $predikat = "A";
} elseif ($nilaiAkhir >= 80) {
    $predikat = "B";
} elseif ($nilaiAkhir >= 75) {
    $predikat = "C";
} elseif ($nilaiAkhir >= 60) {
    $predikat = "D";
} else {
    $predikat = "E";
}


if ($nilaiAkhir >= 75) {
    $status = "LULUS";
} else {
    $status = "TIDAK LULUS";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penilaian Siswa</title>
</head>
<body>
    <h2>Hasil Penilaian Siswa</h2>

    <?php
    echo "Nama: " . $nama . "<br>";
    echo "Kelas: " . $kelas . "<br><br>";

    echo "Nilai Tugas: " . $nilaiTugas . "<br>";
    echo "Nilai UTS: " . $nilaiUTS . "<br>";
    echo "Nilai UAS: " . $nilaiUAS . "<br><br>";

    echo "Nilai Akhir: " . $nilaiAkhir . "<br>";
    echo "Predikat: " . $predikat . "<br>";
    echo "Status: " . $status;
    ?>

</body>
</html>
