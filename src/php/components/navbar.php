<?php session_start(); ?>



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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>


<?php

if (isset($_GET["content"]))
{
  $active = $_GET["content"];
}
else { $active = '';}

?>


<nav class="navbar navbar-expand-md navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="./index.php?content=home">Dagelijks papier</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
      <?php 
          if (isset($_SESSION["id"]))
          {
            switch($_SESSION["role"]){
              case 'admin':
                echo '<li class="nav-item">
                <a class="nav-link '; if ($active == "a-home" || $active == "") {echo "active";} echo'" aria-current="page" href="./index.php?content=a-home">Home</a>
              </li>';
              break;
              case 'root':
                echo '<li class="nav-item">
                <a class="nav-link '; if ($active == "r-home" || $active == "") {echo "active";} echo'" aria-current="page" href="./index.php?content=r-home">Home</a>
              </li>';
              break;
              case 'moderator':
                echo '<li class="nav-item">
                <a class="nav-link '; if ($active == "m-home" || $active == "") {echo "active";} echo'" aria-current="page" href="./index.php?content=m-home">Home</a>
              </li>';
              break;
              case 'customer':
                echo '<li class="nav-item">
                <a class="nav-link '; if ($active == "c-home" || $active == "") {echo "active";} echo'" aria-current="page" href="./index.php?content=c-home">Home</a>
              </li>';
              break;
              default: break;
            }
          }
          else{
            echo '<li class="nav-item">
            <a class="nav-link ';if ($active == "home" || $active == "") {echo "active";} echo'" aria-current="page" href="./index.php?content=home">Home</a>
          </li>';
          }
        ?>
        
        
        
        
      </ul>
      <ul class="navbar-nav ml-auto">
        <?php
  if (isset($_SESSION["id"])) 
  {

    switch ($_SESSION["role"]){
    case 'customer':
      
    break;
    case 'author':
        echo '<a class="nav-link '; if ($active == "Create") {echo "active";} echo'" href="./post.php?content=create">Create post</a>';
    break;
    case 'moderator':
        echo '<a class="nav-link '; if ($active == "Create") {echo "active";} echo'" href="./post.php?content=create">Create post</a>';
    break;
    case 'admin':
        echo '<li class="nav-item">
        <a class="nav-link '; if ($active == "Create") {echo "active";} echo'" href="./post.php?content=create">Create post</a>
      </li>';
      
      echo '<li class="nav-item floatr">
        <a class="nav-link '; if ($active == "AdminDashboard") {echo "active";} echo'" href="./AdminD.php?content=Dashboard">Admin Dashboard</a>
        </li>';

    break;
    default: 
    break;
    }

echo '<li class="nav-item">
<a class="nav-link '; if ($active == "History") {echo "active";} echo'" href="./archief.php?content=archief">Archief</a>
</li>';

echo '<li class="nav-item">
<a class="nav-link '; if ($active == "logout") {echo "active";} echo'" href="./logout.php?content=Logout">Log out</a>
</li>';


    
  } 
  else
  {
    echo '<li class="nav-item">
    <a class="nav-link '; if ($active == "login") {echo "active";} echo'" aria-current="page" href="./login.php?content=Login">Login</a>
  </li>';
  echo '<li class="nav-item">
    <a class="nav-link '; if ($active == "register") {echo "active";} echo'" href="./register.php?content=Register">Sign up</a>
  </li>';
  }



        ?>
        
      </ul>
    </div>
  </div>
</nav>
<!--home archief register login create-->