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
<?php include("./connect.php") ?>
<?php $postindex = 0;?>


<?php 
$sql = "SELECT * FROM `posts` ORDER BY id DESC LIMIT 0 , 1";
$query = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($query)) 
$maxpost = $row['id'];
echo $maxpost . ' posts aan het weergeven';
?>


<?php for ($postindex = 0; $postindex < $maxpost; $postindex++) {?>
    <br>
    <div class="row archive">
            <div class="col-12 border-25 bg-grey largepost">
                <div class="col-6">
                    <img class="border-25" src=
                    "
                    <?php 
                    $sql = "SELECT * FROM `posts` ORDER BY id DESC LIMIT $postindex , 1";
                    $query = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_array($query)) 
                    echo $row['img'] ?>
                    ">
                </div>
                <div class="col-6 displayblock">
                    <?php 
                    $sql = "SELECT * FROM `posts` ORDER BY id DESC LIMIT $postindex, 1";
                    $query = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_array($query)) 
                    {
                    echo '<span class="smalltxt">' . $row['redacteur'] . '</span class="smalltxt">';
                    echo '<h2 class="m0tb">' . $row['titel'] . '</h2>';
                    echo '<span class="m0tb">' . $row['content'] . '</span>';
                    }
                    ?>
                </div>
            </div>
        </div>
        
       <?php } ?>

    
</body>
</html>