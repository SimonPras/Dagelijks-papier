
<?php include("./src/php/components/navbar.php") ?>
<?php include("./connect.php") ?>



<?php var_dump($_GET); 

$id = $_GET['id'];
echo $id;

$sql = "DELETE FROM `gebruikers` WHERE id = $id";

mysqli_query($conn, $sql);

header("Location: ./AdminD.php?content=Dashboard");


?>