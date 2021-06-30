<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SKINCARE N MAKE UP STORE</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&family=Yeon+Sung&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <style>
        .warper{
            background-color: skyblue;
            background: rgba(4, 29, 23, 0.5);
            text-align: center;
            height: 70px;
            width: 200px;
            border: 1px solid gray;
            box-shadow: 0px 0px 20px 5px #00B4FF;
            float: right;
            margin-top: 20px;
            margin-right: 20px;
        }

        .h1a{
            background-color: seagreen;
            background: rgba(4, 29, 23, 0.5);
            margin-left: 0px;
            margin-bottom: 3px;
            color: white;
            border-bottom: 2px solid white;
        }
        h1 {
            color: white;
        }

        a {
            text-decoration: none;
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
    
    <div class="header">
        <center>
        <div class="card">
    <center>
      <h1>KRITIK DAN SARAN</h1>
    </center>

    <form class="input" action="proses.php" method="post">
        <table>
            <tr>
                <td>Nama Lengkap</td>
                <td><input type="text" name="nama" value=""></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" value=""></td>
            </tr>
            <tr>
                <td>E-Mail</td>
                <td><input type="email" name="mail" value=""></td>
            </tr>
            <tr>
                <td>Jenis Kelamin </td>
                <td><select class="" name="jenis">
                        <option value="Laki - Laki" name="jenis">Laki Laki</option>
                        <option value="Perempuan" name="jenis">Perempuan</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Kritik Dan Saran </td>
                <td><textarea name="kritik" rows="4" cols="40"></textarea><br> <br></td>
            </tr>
            <tr class="tombol">
                <td><input type="submit" id="submitbtn" value="KIRIM"> <input type="reset" id="resetbtn" value="BATAL"></td>
            </tr>
        </table>
    </form>

    <div class="lihat" >
        <center>
            <a href="lihat.php">Lihat Kritik Dan Saran</a>
        </center>
    </div>
    </center>
    <br><br><br><br><br><br><br><br><br><br>
    <div align="center">
		<a href="https://www.instagram.com/dara.audia/?hl=id"><img src="img/ig.jfif" width="50" height="50"></a>
        <a href="https://mail.google.com/mail/u/0/#inbox"><img src="img/gmail.png" width="50" height="50"></a>
        <a href="https://www.youtube.com/channel/UCBR8-60-B28hp2BmDPdntcQ"><img src="img/youtube.jfif" width="50" height="50"></a>
        <img src="img/facebook.png" width="50" height="50">
        <img src="img/twitter.jfif" width="50" height="50">
	</div>
</body>
</html>
