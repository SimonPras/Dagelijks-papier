<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dagelijks Papier</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.vertcode.dev/hexaframework/css/vcd-commons.min.css"/>
    <link rel="stylesheet" href="./src/css/hamburger.css">
    <link rel="stylesheet" href="./src/css/style.css">
    <link rel="shortcut icon" href="./img/favicon (3).ico" type="image/x-icon">
</head>
<body>
<?php include("./src/php/components/navbar.php") ?>
<?php include("./connect.php") ?>

<?php 
$sql = "SELECT * FROM `gebruikers` ORDER BY id DESC ";
$query = mysqli_query($conn, $sql);
?>
<div class="row">
<table>
  <!-- <tr>
    <th>ID</th>
    <th>Voornaam</th>
    <th>Tussenvoegsel</th>
    <th>Achternaam</th>
    <th>E-mail</th>
    <th>Rol</th>
  </tr> -->

<?php

  while ($row = mysqli_fetch_array($query)) 
  {
    echo ' <tr> 
    <td>'.$row['fname'].'</td>
    <td>'.$row['middlename'].'</td>
    <td>'.$row['lastname'].'</td>
    <td>'.$row['email'].'</td>
    <td>'.$row['role'].'</td>
    <td>'.$row['id'].'</td>
    
    

    <td> <a href="edituser.php?id='.$row['id'].'">  Edit </td> <td> </a> <a href="ban.php?id='.$row['id'].'">  Ban  </a> </td>

    </tr>';
  }

  echo "</table>";
  
?>

<?php
while ($row = mysqli_fetch_array($query)) 
{



?>


<?php } ?>
</div>
</body>
</html>