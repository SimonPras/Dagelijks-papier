<?php 
var_dump($_POST);

if (empty($_POST["email"])) 

header("Location: ./message.php?content=message&alert=no-email");


else {
    include("./connect.php");
    include("./functions.php");

    $email = sanitize($_POST["email"]);
    $fname = sanitize($_POST["fname"]);
    $middle = sanitize($_POST["middle"]);
    $lname = sanitize($_POST["lname"]);
    $password = sanitize($_POST["password"]);

    $sql = "SELECT * FROM `gebruikers` where `email` = '$email' ";

    $result = mysqli_query($conn, $sql);

    if ( mysqli_num_rows($result) )
    {
        header("Location: ./message.php?alert=emailexists");
    }

    else
    {

      


      $oneh = mktime(1, 0, 0, 1, 1, 1970);
      
      $ut = time();
      
      $mut = microtime();
      $time = explode(" ", $mut);
      $d = date("d-y-m", ($ut + $oneh));

      $password = $time[1] * $time[0] * 1000000;

      $password_hash = password_hash($password, PASSWORD_BCRYPT);

      
      $t = date("H:i:s", ($ut + $oneh));



        // $password = "12345";
        // $password_hash = password_hash($password, PASSWORD_BCRYPT);

        $sql = "INSERT INTO `gebruikers` (
          `id`, `fname`, `middlename`, `lastname`, `email`, `password`
          )
        VALUES (
          NULL, '$fname', '$middle', '$lname', '$email', '$password_hash'
          )";

        if (mysqli_query($conn, $sql)) {

            $id = mysqli_insert_id($conn);

            $to = $email;

            $subject = "activater";
            $message = '<!doctype html>
            <html lang="en">
              <head>
                <!-- Required meta tags -->
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
            
                <!-- Bootstrap CSS -->
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            
                <title>bitch</title>
              </head>
              <body>
                <h1>Dear customer</h1>
                <p>you have signed up to the dagelijks papier website on ' . date("d-m-y") . '</p>
                <p> click <a href="http://pro3/activate.php?content=activate&id=' . $id . '&pwh='. $password_hash .'">here</a> to active your account</p>
                <p> toodles </p>
            
                <!-- Optional JavaScript; choose one of the two! -->
            
                <!-- Option 1: Bootstrap Bundle with Popper -->
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
            
                <!-- Option 2: Separate Popper and Bootstrap JS -->
                <!--
                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
                -->
              </body>
            </html>
            ';
            
            $headers = "MIME-Version: 1.0\r\n";
            $headers .= "Content-type: text/html; charset=UTF-8\r\n";
            $headers .= "From: FredFaz@pizapx.co";


            mail($to, $subject, $message, $headers);

            header("Location: ./message.php?content=message&alert=registersuccess");
        }
        else{
            header("Location: ./message.php?content=message&alert=registererror");
        };
    }
}
?>