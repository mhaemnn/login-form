<!DOCTYPE html>
<html>

<head>
    <title>Pengulangan</title>
</head>

<body>
    <?php

    # inisialisasi variabel tidak harus dari angka 0
    for ($i = 1; $i <= 10; $i++) {
        echo "Perulangan ke-{$i} <br>";
    };

    # kode program ini akan menampilkan * dalam bentuk persegi
    # dengan ukuran 5x5
    for ($i = 0; $i < 5; $i++) {
        for ($j = 0; $j < 5; $j++) {
            echo "* ";
        }

        echo "<br>";
    }

    // menampilkan array
    $listMahasiswa = ['Nurul Huda', 'Wahid Abdullah', 'Elmo Bachtiar'];

    for ($i = 0; $i < count($listMahasiswa); $i++) {
        echo "Nama: {$listMahasiswa[$i]} <br>";
    }

    // perintah break dan continue
    # inisialisasi variabel tidak harus dari angka 0
    for ($i = 1; $i <= 50; $i++) {
        if ($i % 10 === 0) {
            continue; # skip perulangan jika nilai $i habis dibagi 10
        }

        echo "Perulangan ke-{$i} <br>";

        if ($i > 40) {
            break; # hentikan perulangan jika $i lebih dari 20
        }
    }
    ?>
</body>

</html>