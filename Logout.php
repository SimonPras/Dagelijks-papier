<?php include("./src/php/components/navbar.php") ?>
<?php 

//maakt session leeg
unset($_SESSION["id"]);
unset($_SESSION["role"]);

//verwijder het session bestand
session_destroy();

header("Location: ./message.php?content=message&alert=logout")
?>