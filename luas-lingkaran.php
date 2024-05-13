<?php
    $jari_jari = 7;
    echo "jari-jari lingkaran tersebut adalah $jari_jari <br>";

    $phi = 3.14;
    $luas_lingkaran = $phi * $jari_jari * $jari_jari;
    echo "luas lingkaran tersebut adalah $luas_lingkaran";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Menghitung Luas Lingkaran</h1>
    <p>Luas lingkaran dengan jari-jari <?=$jari_jari?> adalah <?=$luas_lingkaran?></p>
</body>
</html>