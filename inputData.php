<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&family=Yeon+Sung&display=swap" rel="stylesheet">
    <title>Input Admin</title>
    <style>
        table {
            box-shadow: 0 2px 5px 0 rgba(0,0,0.1);
            border-radius: 5px;
            padding: 20px;
            margin-top: 20px;
            background-color: rgba(169, 113, 31, 0.7);
            width: 600px;
            height: 400px;
            color: white;
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

        input, select {
            border-radius: 5px;
        }

        h3 {
            font-family: 'Montserrat', sans-serif;
        }
    </style>
</head>
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
<body>
    <?php

    include "connect.php";
    $price = 0;
    if (isset($_POST['proses'])) {
        switch ($_POST['cutting']){
            case 'Under Cut':
                $price += 35000;
                break;
            case 'Fringe':
                $price += 35000;
                break;
            case 'Comma Hair':
                $price += 35000;
                break;
            case 'Line UP Hair Cut':
                $price += 35000;
                break;
            case 'Faux Hawk':
                $price += 40000;
                break;
            case 'Side Part':
                $price += 35000;
                break;
            case 'Buzz Cut':
                $price += 35000;
                break;
            default:
                break;
        }
        switch ($_POST['colorring']){
            case 'Ash Brown':
                $price += 250000;
                break;
            case 'Pink':
                $price += 200000;
                break;
            case 'Red':
                $price += 150000;
                break;
            case 'Blue':
                $price += 150000;
                break;
            case 'Grey':
                $price += 300000;
                break;
            case 'Brown':
                $price += 100000;
                break;
            case 'Highlight Brown':
                $price += 300000;
                break;
            default:
                break;
        }
        switch ($_POST['service']){
            case 'Creambath':
                $price += 60000;
                break;
            case 'Styling Pomade':
                $price += 15000;
                break;
            case 'Smoothing':
                $price += 100000;
                break;
            case 'Pijat Refleksi Kepala':
                $price += 25000;
                break;
            case 'Manicure':
                $price += 60000;
                break;
            default:
                break;
        }

        if ($_POST['nama'] == NULL) {
            # code...
            echo "<h1 style='text-align:center;'>Harap Masukkan Nama</h1>";
        }else if ($_POST['cutting'] == '.-') {
            # code...
            if ($_POST['colorring'] == '.-'){
                if ($_POST['service'] == '.-'){
                    echo "<h1 style='text-align:center;'>Harap Masukkan Pilihan, Setidaknya 1 Saja Atau Tidak Sama Sekali</h1>";
                }
            }
        } else if ($_POST['cabang'] == '.-'){
            # code...
            echo "Harap Masukkan Cabang.";
        }else{
            $cabang = $_POST['cabang'];
            $namaCust = $_POST['nama'];
            $modelCut = $_POST['cutting'];
            $coloring = $_POST['colorring'];
            $tanggalTransaksi = date("Y-m-d H:i:s");
            $service = $_POST['service'];

            mysqli_query($connect, "insert into transaksi set 
            noTransaksi = '',
            namaCust = '$namaCust',
            cabang = '$cabang',
            modelCut = '$modelCut',
            coloring = '$coloring',
            service = '$service',
            tanggalTransaksi = '$tanggalTransaksi',
            totalHarga = '$price'");
            echo "<h1 style='text-align:center;'>Input Data Kasir Berhasil</h1>";
            echo "<h1 style='text-align:center;'>Total Harga Rp$price</h1>";
        }
        
    }

    ?>
    <center>
        <br><br>
        <h3>--------------------------------------------------------------------------------------------------------------</h3>
        <h3>KLIK BUTTON DIBAWAH INI JIKA INGIN MELIHAT DATA TRANSAKSI</h3>
        <button><a href="read.php">Data Transaksi</a></button>
        <h3>--------------------------------------------------------------------------------------------------------------</h3>
        <br>
    </center>
    <form action="inputData.php" method="POST">
        <center>
            <h1>Input Transaksi</h1>
            <table>
                <tr>
                    <td>Nama Customer</td>
                    <td>:</td>
                    <td><input type="text" name="nama" required></td>
                </tr>
                <tr>
                    <td>Model Cutting</td>
                    <td>:</td>
                    <td>
                        <select name="cutting">
                            <option>.-</option>
                            <option>Under Cut</option>
                            <option>Fringe</option>
                            <option>Comma Hair</option>
                            <option>Line UP Hair Cut</option>
                            <option>Faux Hawk</option>
                            <option>Side Part</option>
                            <option>Buzz Cut</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Coloring</td>
                    <td>:</td>
                    <td>
                        <select name="colorring">
                            <option>.-</option>
                            <option>Ash Brown</option>
                            <option>Pink</option>
                            <option>Red</option>
                            <option>Blue</option>
                            <option>Grey</option>
                            <option>Brown</option>
                            <option>Highlight Brown</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Service</td>
                    <td>:</td>
                    <td>
                        <select name="service">
                            <option>.-</option>
                            <option>Creambath</option>
                            <option>Styling Pomade</option>
                            <option>Smoothing</option>
                            <option>Pijat Relaksi Kepala</option>
                            <option>Manicure</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Cabang</td>
                    <td>:</td>
                    <td>
                        <select name="cabang">
                            <option>.-</option>
                            <option>Jl. Pondok Indah</option>
                            <option>Jl. Rasuna Indah</option>
                            <option>Jl. Malioboro</option>
                        </select>
                    </td>
                </tr>
            </table>
            <br>
            <button value="Simpan" name="proses">Simpan</button>
        </center>
    </form>
    
</body>
</html>

