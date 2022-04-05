
<?php include("./src/php/components/navbar.php") ?>
<?php include("./connect.php") ?>

<?php $id = $_GET["id"];

$sql = "SELECT * FROM `gebruikers` WHERE id = $id";

$result = mysqli_query($conn, $sql);

$record = mysqli_fetch_assoc($result); ?>

<?php $id = $_GET['id']; ?>

<?php echo $record['fname']; ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <div class="block">
            <h3>Edit user</h3>
            <form action="./updatescriptu.php" method="post">
                <div class="form-group">
                    <label for="">voornaam</label>
                    <input value="<?php echo $record['fname']; ?>" placeholder="(vereist)" type="text" name="fname" id="fname" Required>
                    <small id="titel" class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                    <label for="">tussenvoegsel</label>
                    <input value="<?php echo $record['middlename']; ?>" placeholder="" type="text" name="mname" id="mname">
                    <small id="content" class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                    <label for="">achternaam</label>
                    <input value="<?php echo $record['lastname']; ?>" placeholder="(vereist)" type="text" name="lname" id="lname" Required>
                    <small id="foto" class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                    <label for="">email</label>
                    <input value="<?php echo $record['email']; ?>" placeholder="(vereist)" type="text" name="email" id="email" Required>
                    <small id="foto" class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                    <label for="">role</label>
                    <input value="<?php echo $record['role']; ?>" placeholder="(vereist)" type="text" name="role" id="role" Required>
                    <small id="foto" class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                    <label for="">activated</label>
                    <input value="<?php echo $record['active']; ?>" placeholder="(vereist)" type="text" name="active" id="active" Required>
                    <small id="foto" class="form-text text-muted"></small>
                </div>
                <input class="btm btn-danger" type="submit" value="verander">
            </form>
            </div>
        </div>
    </div>
</div>