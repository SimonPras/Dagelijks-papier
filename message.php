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
<?php


$alert = (isset($_GET["alert"]))? $_GET["alert"]: "default";
$id = (isset($_GET["id"]))? $_GET["id"]: "";
$pwh = (isset($_GET["pwh"]))? $_GET["pwh"]: "";


switch ($_GET["alert"]) {
    case "hacker" :
      echo '<div class="alert alert-danger" role="alert">
      You\'re a dirty hacker.   
      <br>
      basil is angry. 
      </div>
      <img src="./img/angribagel.gif">';
      header("Refresh: 3; ./index.php?content=home" );
    break;
    case "alreadyactive" :
      echo '<div class="alert alert-danger" role="alert">
      account already active
      </div>';
      header("Refresh: 3; ./index.php?content=home" );
    break;
    case "noidpwhmatch" :
      echo '<div class="alert alert-danger" role="alert">
      you are not registered in the database. please try again   
      </div>';
      header("Refresh: 3; ./index.php?content=home" );
    break;
    case "success" :
      echo '<div class="alert alert-success" role="alert">
      registration succes! 
      </div>';
      header("Refresh: 3; ./index.php?content=home" );
    break;
    case "error" :
      echo '<div class="alert alert-danger" role="alert">
      registration failed. please try again
      </div>';
      header("Refresh: 3; ./index.php?content=home" );
    break;
    case "passwordnotequal" :
      echo '<div class="alert alert-danger" role="alert">
      passwords do not match.
      </div>';
      header("Refresh: 3; ./activate.php?content=activate&id=$id&pwh=$pwh");
    break;
    case "nopassword" :
      echo '<div class="alert alert-danger" role="alert">
      No password entered, please enter a password.
      </div>';
      header("Refresh: 3; ./index.php?content=activate&id=$id&pwh=$pwh");
    break;
    case "no-email" :
        echo '<div class="alert alert-danger" role="alert">
        no email address, please enter your email address
        </div>';
        header("Refresh: 3; ./index.php?content=home" );
    break;
    case "registersuccess" :
      echo '<div class="alert alert-success" role="alert">
      email sent to confirm, please check your inbox.
      </div>';
      header("Refresh: 3; ./register.php?content=Register");
  break;
    case "registererror" :
      echo '<div class="alert alert-danger" role="alert">
      error registering, please try again.
    </div>';
    header("Refresh: 3; ./index.php?content=activate&id=$id&pwh=$pwh");
  break;
    case "emailexists":
      echo '<div class="alert alert-danger" role="alert">
            email already exists, please enter a different email address
            </div>';
      header("Refresh: 3; ./index.php?content=home");
    default: header("Refresh: 3; ./index.php?content=home" );
}

?>
</body>
</html>