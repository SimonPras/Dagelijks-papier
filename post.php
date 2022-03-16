<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include("./navbar.php")?>
    <div class="mb-3">
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
    <label for="inputredacteur">redacteur</label>
    <input placeholder="(vereist)" type="text" name="redacteur" id="inputredacteur" Required>
    </div>

    <div class="mb-3">
    <form action="create.php" method="post">
        <label for="inputfoto">adres van afbeelding</label>
    <input placeholder="(optioneel)" type="text" name="foto" id="foto">
    </div>

    <div class="mb-3">
    <input class="btn" type="submit" value="SUBMIT">

</body>
</html>