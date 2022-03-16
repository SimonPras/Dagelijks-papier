<?php var_dump($_POST) ?>

<?php include './connect.php';

$title = $_POST['titel'];
$content = $_POST['content'];
$author = $_POST['redacteur'];
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