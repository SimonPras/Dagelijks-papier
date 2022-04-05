<?php include("./connect_db.php") ?>
<?php var_dump($_POST);

$id = $_POST['id'];
$email = $_POST['email'];
$password = $_POST['password'];
$active = ($_POST['active']);
$role = $_POST['role'];
var_dump($active);
$activeint = (int) $active;
var_dump($activeint);

echo "<br>";
$sql = "UPDATE `register` SET `email` = '$email', `password` = '$password', `role` = '$role', `email` = '$email', `role` = '$role', `activated` = $activeint WHERE `id` = $id;";
mysqli_query($conn, $sql);
header("Location: ./index.php?content=a-Users");
echo $sql;
?>