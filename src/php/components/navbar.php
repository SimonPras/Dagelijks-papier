<?php session_start(); ?>
<head><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

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