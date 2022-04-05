<?php include("./connect.php") ?>
<?php var_dump($_POST);

$id = $_POST['id'];
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = ($_POST['lname']);
$email = $_POST['email'];
$role = $_POST['role'];
$active = $_POST['active'];

var_dump($active);
$activeint = (int) $active;
var_dump($activeint);

echo "<br>";
$sql = "UPDATE `gebruikers` SET `fname` = '$fname', `middlename` = '$mname', `lastname` = '$lname', `email` = '$email', `role` = '$role', `active` = $activeint WHERE `id` = $id;";
mysqli_query($conn, $sql);
header("Location: ./admind.php");
echo $sql;
?>