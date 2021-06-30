<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KAZUMA BARBERSHOP</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        body {
            background-image: url(img/bglogin.jpg);
        }
        table{
	        position: center;
        }
        td , th{
            padding: 10px 20px;
            text-align: center;
        }
        th{
            background-color: #cc8800;
            color: #fafafa;
            font-family: 'Open Sans',Sans-serif;
            font-weight: 200;
            text-transform: uppercase;
        }
        tr{
            width: 100%;
            background-color: #f3e5c7;
            font-family: 'Montserrat', sans-serif;
        }
        tr:nth-child(even){
            
        }

        h3 {
            color:white;
        }
        h1 {
            color: white;
            font-family: 'Roboto Mono', monospace;
        }
    </style>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&family=Yeon+Sung&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@300&display=swap" rel="stylesheet">
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
    <center>
        <h1>PRICE LIST KAZUMA BARBERSHOP</h1>
    </center>
    <div id="model1">
        <h3 align="center">CUTTING</h3>
        <img class="model2 "src="img/cut1.jpg">
        <br>
        <table>
            <tr>
                <th>No</th>
                <th>Model Cutting</th>
                <th>Harga</th>
            </tr>
            <?php
            include "connect.php";
            $no=1;
            $ambildata = mysqli_query($connect, "SELECT * FROM cutting");
            while ($tampil = mysqli_fetch_array($ambildata)) {
                echo "
                <tr>
                    <td>$no</td>
                    <td>$tampil[modelCut]</td>
                    <td>$tampil[hargaCut]</td>
                </tr>
                ";
                $no++;
            }
            ?>
        </table>
    </div>
    <div id="model2">
        <h3 align="center">COLORING</h3>
        <img class="model2 "src="img/color.jpg">
        <br>
        <table>
            <tr>
                <th>No</th>
                <th>Warna Coloring</th>
                <th>Harga</th>
            </tr>

            <?php
            
            include "connect.php";
            $no=1;
            $ambildata = mysqli_query($connect, "SELECT * FROM coloring");
            while ($tampil = mysqli_fetch_array($ambildata)) {
                echo "
                <tr>
                    <td>$no</td>
                    <td>$tampil[warna]</td>
                    <td>$tampil[hargaColoring]</td>
                </tr>
                ";
                $no++;
            }
            ?>
        </table>
    </div>
    <div id="model3">
        <h3 align="center">SERVICE</h3>
        <img class="model3" src="img/sv.jpg">
        <br>
        <table>
            <tr>
                <th>No</th>
                <th>Service</th>
                <th>Harga Service</th>
            </tr>

            <?php
            
            include "connect.php";
            $no=1;
            $ambildata = mysqli_query($connect, "SELECT * FROM service");
            while ($tampil = mysqli_fetch_array($ambildata)) {
                echo "
                <tr>
                    <td>$no</td>
                    <td>$tampil[namaService]</td>
                    <td>$tampil[hargaService]</td>
                </tr>
                ";
                $no++;
            }
            ?>
        </table>
    </div>
</body>
</html>
