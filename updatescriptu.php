<?php include("./src/php/components/navbar.php") ?>
<?php include("./connect.php") ?>
<?php var_dump($_POST);

$id = $_POST['id'];
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$active = (int)($_POST['active']);
$role = $_POST['role'];


$sql = "UPDATE `gebruikers` SET `Fname` = '$fname', `middlename` = '$mname', `lastname` = '$lname', `email` = '$email', `role` = '$role', `active` = '$active' WHERE `id` = $id;";
mysqli_query($conn, $sql);
//header("Location: ./admind");
echo $sql;
?>