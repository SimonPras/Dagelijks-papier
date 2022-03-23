<!DOCTYPE html>
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
            <form  action="./register_script.php" method="post">
                <div class="form-group">
                    <label for="fname">Vul uw Voornaam in</label>
                    <input name="fname" type="fname" class="form-control" id="fname" aria-describedby="fname" required>
                    
                    <label for="middle">Vul uw Middelste naam/tussenvoegsel </label>
                    <input name="middle" type="middle" class="form-control" id="middle" aria-describedby="middle">
                  
                    <label for="lname">Vul uw achternaam in</label>
                    <input name="lname" type="lname" class="form-control" id="lname" aria-describedby="lname" required>
                    
                    <label for="email">Vul uw e-mail adress</label>
                    <input name="email" type="email" class="form-control" id="email" aria-describedby="email" required>

                    <label for="password">Vul uw wachtwoord in</label>
                    <input name="password" type="password" class="form-control" id="password" aria-describedby="password" required>
                </div>

                <button type="submit">Register</button>
            </form>
        </div>
        
    </div>


</div>
</body>
</html>