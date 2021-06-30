<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/read.css">
    <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&family=Yeon+Sung&display=swap" rel="stylesheet">
    <title>Data Transaksi</title>
    <style>
    body {
        background-image: url(img/bgdata.jpg);
        background-size : 100%;
    }
    button {
            background: rgba(169, 113, 31, 0.7);
            border: none;
            border-radius: 21px;
            box-shadow: 0px 1px 8px #0f2027;
            cursor: pointer;
            color: white;
            font-family: sans-serif;
            height: 40px;
            margin: 0 auto;
            margin-top: 10px;
            width: 80px;
    }
    button a {
        text-decoration: none;
        color: white;
    }

    p {
        color: white;
    }
    </style>
</head>
<body>
    <nav>
        <div class="logo">
            <h4>SKINCARE N MAKE UP STORE</h4>
        </div>

        <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="product.php">PRODUCT</a></li>
            <li><a href="about.php">BRANCH</a></li>
            <li><a href="contact.php">CONTACT US</a></li>
            <li><a href="login.php">ADMIN</a></li>
        </ul>
    </nav>
    <button><a href="inputData.php">Input</a></button>
    <table>
    <br><br>
        <center><p>Data Transaksi</p></center>
        <tr>
            <th>No</th>
            <th>Nomor Transaksi</th>
            <th>Cabang</th>
            <th>Nama Customer</th>
            <th>Model Cutting</th>
            <th>Cat Rambut</th>
            <th>Service</th>
            <th>Tanggal Transaksi</th>
            <th>Total Harga</th>
        </tr>

        <?php

        include "connect.php";
        $no = 1;
        $ambildata = mysqli_query($connect, "SELECT * FROM transaksi");

        while ($tampil = mysqli_fetch_array($ambildata)){
            echo "
            <tr>
                <td>$no</td>
                <td>$tampil[noTransaksi]</td>
                <td>$tampil[cabang]</td>
                <td>$tampil[namaCust]</td>
                <td>$tampil[modelCUt]</td>
                <td>$tampil[coloring]</td>
                <td>$tampil[service]</td>
                <td>$tampil[tanggalTransaksi]</td>
                <td>$tampil[totalHarga]</td>
            </tr>
            ";
            $no++;
        }

        ?>
    </table>
</body>
</html>
