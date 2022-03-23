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
    <?php
        if(!(isset($_GET["content"]) && isset($_GET["id"]) && isset($_GET["pwh"])))
        {
            header("Location: ./message.php?content=message&alert=hacker");
        }
    ?>
    
    <div class="container mt-5">
        <div class="row">
            <div class="col-6">
                <form  action="./activate_script.php?content=activate_script" method="post">
                    <div class="form-group">
                        <label for="inputPassword">Enter a new password</label>
                        <input name="password" type="password" class="form-control" id="inputPassword" aria-describedby="passwordHelp">
                        <small id="passwordHelp" class="form-text text-muted">Choose a radical password!</small>
                    </div>
                    <div class="form-group">
                        <label for="inputPasswordCheck">Repeat your password</label>
                        <input name="passwordCheck" type="password" class="form-control" id="inputPasswordCheck" aria-describedby="passwordHelpCheck">
                        <small id="passwordHelpCheck" class="form-text text-muted">NO TYPOS!!!</small>
                    </div>
                    <input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>">
                    <input type="hidden" name="pwh" value="<?php echo $_GET["pwh"]; ?>">
                    <button type="submit" class="btn btn-primary">Activate</button>
                </form>
            </div>
            
        </div>
    
    
    </div>
</body>
</html>