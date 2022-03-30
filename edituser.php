
<?php include("./src/php/components/navbar.php") ?>
<?php include("./connect.php") ?>

<?php $id = $_GET["id"];

$sql = "SELECT * FROM `gebruikers` WHERE id = $id";

$result = mysqli_query($conn, $sql);

$record = mysqli_fetch_assoc($result); ?>

<?php $id = $_GET['id']; ?>

<?php echo $record['fname']; ?>

<form action="./updatescriptu.php" method="post">
<label for="">voornaam</label>
<input value="<?php echo $record['fname']; ?>" placeholder="(vereist)" type="text" name="fname" id="fname" Required>
<br>
<label for="">tussenvoegsel</label>
<input value="<?php echo $record['middlename']; ?>" placeholder="(vereist)" type="text" name="mname" id="mname" Required>
<br>
<label for="">achternaam</label>
<input value="<?php echo $record['lastname']; ?>" placeholder="(vereist)" type="text" name="lname" id="lname" Required>
<br>
<label for="">email</label>
<input value="<?php echo $record['email']; ?>" placeholder="(vereist)" type="text" name="email" id="email" Required>
<br>
<label for="">role</label>
<input value="<?php echo $record['role']; ?>" placeholder="(vereist)" type="text" name="role" id="role" Required>
<br>
<label for="">activated</label>
<input value="<?php echo $record['active']; ?>" placeholder="(vereist)" type="text" name="active" id="active" Required>
<br>

<br>
<label for="">id to edit</label>
<input value="<?php echo $record['id']; ?>" placeholder="(vereist)" type="text" name="id" id="id" Required>
<br>

<input class="Confirmbtn" type="submit" value="verander">