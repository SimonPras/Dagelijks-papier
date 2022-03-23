<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
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
      account already active;
      header("Refresh: 3; ./index.php?content=home" );
      </div>';
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