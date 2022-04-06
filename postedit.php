<?php include("./src/php/components/navbar.php") ?>
<?php include("./connect.php") ?>

<?php 
$id = $_GET['id'];
$sql = "SELECT * FROM `gebruikers` WHERE id = $id";

$query = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($query)) 
{
echo $row['fname'];
echo $row['id'];
$name = $row['fname'];
}
echo "<br>";

$query = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($query)) 
{
$maxpost = $row['id'];
echo $maxpost . ' posts in totaal';
}
?>
<?php for ($postindex = 0; $postindex < $maxpost; $postindex++) {?>
    <br>
    <div class="row archive">
            <div class="col-12 border-25 bg-grey largepost">
                <div class="col-6 displayblock">
                    <?php 
                    $sql = "SELECT * FROM `posts` ORDER BY id DESC LIMIT $postindex, 1";
                    $query = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_array($query)) 
                    {
                        //

                        if(empty($row['titel']) == true)
                        {
                            echo '<h2 class="m0tb"> post has been deleted </h2>';
                        }
                        else
                        {
                            echo '<span class="smalltxt">' . $row['redacteur'] . '</span class="smalltxt">';
                            echo '<h2 class="m0tb">' . $row['titel'] . '</h2>';
                            echo '<span class="m0tb">' . $row['content'] . '</span>';
                        }
                    }
                    ?>
                </div>
                <div class="col-6">
                    <img class="border-25" src=
                    "<?php 
                    $sql = "SELECT * FROM `posts` ORDER BY id DESC LIMIT $postindex , 1";
                    $query = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_array($query)) 
                    {
                    echo $row['img'];
                    }
                    ?>">
                </div>
                
            </div>
        </div>
        
       <?php } ?>