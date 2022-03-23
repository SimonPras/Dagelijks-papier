<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dagelijks Papier</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.vertcode.dev/hexaframework/css/vcd-commons.min.css"/>
    <link rel="stylesheet" href="./src/css/hamburger.css">
    <link rel="stylesheet" href="./src/css/style.css">
    <link rel="shortcut icon" href="./img/favicon (3).ico" type="image/x-icon">
</head>
<body>
<?php include("./src/php/components/navbar.php") ?>
<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <div class="block">
            <form action="./login_script.php?content=login_script" method="post">
                <div class="form-group">
                    <label for="email">Enter your email address</label>
                    <input name="email" type="email" class="form-control" id="email" aria-describedby="email" required>
                    <small id="email" class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                    <label for="password">Enter your password</label>
                    <input name="password" type="password" class="form-control" id="password" aria-describedby="password" required>
                    <small id="password" class="form-text text-muted"></small>
                </div>
                <button type="submit" class="btn btn-danger">Register</button>
            </form>
            </div>
        </div>
    </div>
</div>
<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <div class="smalblock">
                <a class="normallink" href="./register.php">Nog geen account? Registreer</a>
            </div>    
        </div>
    </div>
</div>
</body>