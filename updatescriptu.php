<?php include("./src/php/components/navbar.php") ?>
<?php include("./connect.php") ?>
<?php var_dump($_POST);

$fname = $_POST['fname'];



$sql = "UPDATE `gebruikers` SET `Fname` = '$fname', `Email` = '$Email', `Tijd` = '$Tijd', `bericht` = '$Bericht', `Tevreden` = '$Tevreden' WHERE `scores`.`ID` = $id;";


?>