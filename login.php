<?php

if( isset($_POST["submit"]) ){
    if( $_POST["username"] == "daraaudia" && $_POST["password"] == "qwerty123"){
        header("Location: read.php");
        exit;
    }
}else{
    $error = true;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <style>
    body{
        background-image: url(img/bglogin.jpg);
        background-size: 100%;
    }
    </style>
</head>
<body>
    <form action="" method="post">
        <div class="login">
            <div class="avatar">
                <i class="fa fa-user"></i>
            </div>
            <h2>Login Admin</h2>
            <div class="input-group">
                <input type="text" name="username" id="username" required="">
                <span>Username</span>
            </div>
            <div class="input-group">
                <input type="password" name="password" id="password"required="">
                <span>Password</span>
            </div>
            <div class="input-group">
                <input type="submit" name="submit" value="login">
            </div>
        </div>
    </form>
</body>
</html>
