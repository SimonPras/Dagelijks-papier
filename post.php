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
<!-- <div class="thirdblock"> -->
<?php include("./src/php/components/navbar.php") ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <div class="block">
            <h3>Create post</h3>
            <form action="./create.php" method="post">
                <div class="form-group">
                    <label for="titel">Post titel</label>
                    <input name="titel" type="titel" class="form-control" id="titel" aria-describedby="titel" required>
                    <small id="titel" class="form-text text-muted"></small>
                </div>
                <div class="form-group posst-content">
                    <label for="content">Post content</label>
                    <input name="content" type="content" class="form-control post-content" id="content" aria-describedby="content" required>
                    <small id="content" class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                    <label for="foto">adres van afbeelding</label>
                    <input name="foto" type="foto" class="form-control" id="foto" aria-describedby="foto">
                    <small id="foto" class="form-text text-muted"></small>
                </div>
                <button type="submit" class="btn btn-danger">Verstuur</button>
            </form>
            </div>
        </div>
    </div>
</div>

<!-- <div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <div class="block">
    <form action="create.php" method="post">
    <label for="inputtitel">Post titel</label>
    <input placeholder="(vereist)" type="text" name="titel" id="inputtitel" Required>
    </div>
    
    <div class="mb-3">
    <form action="create.php" method="post">
    <label for="inputcontent">content</label>
    <input placeholder="(vereist)" type="text" name="content" id="inputcontent" Required>
    </div>

    

    <div class="mb-3">
    <form action="create.php" method="post">
        <label for="inputfoto">adres van afbeelding</label>
    <input placeholder="(optioneel)" type="text" name="foto" id="foto">
    </div>

    <div class="mb-3">
    <input class="btn" type="submit" value="SUBMIT">
</div> -->
</body>
</html>