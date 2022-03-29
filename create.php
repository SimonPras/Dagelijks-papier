<?php include("./src/php/components/navbar.php") ?>
<?php include './connect.php';


$title = $_POST['titel'];
$content = $_POST['content'];
$id = $_SESSION["id"];
$sql = "SELECT * FROM `gebruikers` WHERE id = $id";
$query = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($query)) 
$author = $row['fname'];   // $_POST['redacteur']; 

$image = $_POST['foto'];





$sql = "INSERT INTO 
`posts` (
`id`, `titel`, `content`, `redacteur`, `img`
)
VALUES
(
NULL, '$title', '$content', '$author', '$image')
;";

if($result = mysqli_query($conn, $sql))
{
    header("Location:./index.php");
}

else {
    echo "er is een fout opgetreden, probeer het opnieuw";
    header("Location:./index.php", 3);
}
?>