<!DOCTYPE html>
<html lang="en">

<body>
    <?php include("./src/php/components/navbar.php") ?>
    <?php include("./connect.php"); ?>

    <?php $id = $_GET["id"];

$sql = "SELECT * FROM `posts` WHERE id = $id";

$result = mysqli_query($conn, $sql);

$record = mysqli_fetch_assoc($result); ?>



<?php //echo $record['fname']; ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <div class="block">
            <h3>Edit post</h3>
            <form action="./updatepost.php" method="post">
                <div class="form-group">
                    <label for="titel">Post titel</label>
                    <input value="<?php echo $record['titel']; ?>" name="titel" type="titel" class="form-control" id="titel" aria-describedby="titel" required>
                    <small id="titel" class="form-text text-muted"></small>
                </div>
                <div class="form-group posst-content">
                    <label for="content">Post content</label>
                    <input value="<?php echo $record['content']; ?>" name="content" type="content" class="form-control post-content" id="content" aria-describedby="content" required>
                    <small id="content" class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                    <label for="foto">adres van afbeelding</label>
                    <input value="<?php echo $record['img']; ?>" name="foto" type="foto" class="form-control" id="foto" aria-describedby="foto">
                    <small id="foto" class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                    <!-- <label for="foto">doel id (aangeraden niet te veranderen)</label> -->
                    <input value="<?php echo $record['id']; ?>" name="id" type="hidden" class="form-control" id="id" aria-describedby="id">
                    <small id="foto" class="form-text text-muted"></small>
                </div>
                <button type="submit" class="btn btn-danger">Verstuur</button>
            </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>