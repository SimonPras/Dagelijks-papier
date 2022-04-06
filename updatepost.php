<?php include("./src/php/components/navbar.php") ?>
<?php include './connect.php';


$title = $_POST['titel'];
$content = $_POST['content'];
$id = $_POST["id"];
$image = $_POST['foto'];

$sql = "UPDATE `posts` SET `titel` = '$title', `content` = '$content', `img` = '$image' WHERE `id` = $id;";

$query = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($query)) 
$author = $row['fname'];   // $_POST['redacteur']; 








if($result = mysqli_query($conn, $sql))
{
    header("Location:./index.php");
}


else {
    echo "er is een fout opgetreden, probeer het opnieuw";
    header("Location:./index.php", 3);
}
echo $sql;
?>