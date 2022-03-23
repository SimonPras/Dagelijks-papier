<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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