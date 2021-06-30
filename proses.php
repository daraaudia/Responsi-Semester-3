<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KAZUMA BARBERSHOP</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&family=Yeon+Sung&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <style>
        a {
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="card">
        <center>
            <div class="lihat">
                <?php

                    echo "FORM KRITIK DAN SARAN <br>";
                    $fp = fopen("Bukutamu.txt","a+");
                    $nama = $_POST['nama'];
                    $alamat = $_POST['alamat'];
                    $email = $_POST['mail'];
                    $jenis = $_POST['jenis'];
                    $kritik = $_POST['kritik'];

                    fputs($fp, "$nama|$alamat|$email|$jenis|$kritik \n");
                    fclose($fp);

                    echo "<h1> Terimakasih Telah Memberi Kritik Dan Saran </h1> <br>";
                    echo "<a href=bukutamu.php> Isi Kritik Dan Saran || </a>";
                    echo "<a href=lihat.php> Lihat Kritik Dan Saran </a> <br>";
                ?>
            </div>
        </center>
    </div>
</body>
