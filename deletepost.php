<?php include("./src/php/components/navbar.php") ?>
<?php include("./connect.php") ?>



<?php var_dump($_GET); 

$id = $_GET['id'];
echo $id;

$sql = "UPDATE `posts` SET `titel` = '', `content` = '', `redacteur` = '' , `img` = 'https://www.botlibre.com/media/a11675768-0.png' WHERE `id` = $id;";

mysqli_query($conn, $sql);
echo $sql;
header("Location: ./index.php");


?>