<!DOCTYPE html>
<html>

<head>
    <title>Tipe Data</title>
</head>

<body>
    <?php
    // tipe data:

    // tipe data char
    $jenisKelamin = "L";
    // tipe data string 
    $nama_lengkap = "nanangsurotong";
    // tipe data int
    $umur  = 10;
    // tipe data float
    $berat = 50.4;
    // tipe data boolean
    $menikah = false;

    echo "Nama: $nama_lengkap <br>";
    echo "Jenis Kelamin: $jenisKelamin <br>";
    echo "umur: $umur tahu <br>";
    echo "berat: $berat kg <br>";
    echo "menikah: $menikah";
    echo "==================================";

    // tipe data char dan string
    $alamat = "JL Javascript No.23, Jakrta ";

    // tipe data int
    $point = -21;
    $nilai = 23;

    // tipe data float 
    $panjang = 234.12;
    $kapasistas = 12330.90;

    $jarak = 1.2E-5;
    // tipe data float dapat ditulis dalam notasi seperti ini.
    // E-5 adalah eksponen dari 10 contoh ini sama saja dengan 1.2 x 10-5. kalau di jabarkan akan menjadi 
    // 0.000012
    // agar format float tidak tercetak dalam nota E bisa menggunakan fungsi sprintf()

    echo sprintf('%f', $a);
    // batasi angka dibelakang koma
    echo sprintf('%.3f', $a);

    // tipe data array dalam php
    $minuman = array("kopi", "teh", "susu");
    $makanan = ["nasgor", "seblak", "bubur"];

    // tipe data NULL
    $nama =  NULL;

    // konversi tipe data php versi bahasa C
    $angka = "32";
    $angka = (int) $angka; // merubah nilai angka menjadi int
    $angka = (float) $angka; // merubah nilai angka menjadi float
    $angka = (string) $angka; // merubah nilai angka menjadi string





    ?>
</body>

</html>