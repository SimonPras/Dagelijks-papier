<?php 


include("./connect.php");
include("./functions.php");

$id = sanitize($_POST['id']);
$pwh = sanitize($_POST['pwh']);
$password = sanitize($_POST['password']);
$passwordCheck = sanitize($_POST['passwordCheck']);

if(empty($_POST["password"]) || empty($_POST["passwordCheck"])) 
{
    header("Location: ./message.php?content=message&alert=nopassword&id=$id&pwh=$pwh");
}

elseif (strcmp($password, $passwordCheck))
{
    header("Location: ./message.php?content=message&alert=passwordnotequal&id=$id&pwh=$pwh");
}
else 
{
    $sql = "SELECT * FROM `gebruikers` WHERE `id` = $id";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result))
    {

        $record = mysqli_fetch_assoc($result);

        if ( $record["active"] )
        {
            header("Location: ./message.php?content=message&alert=alreadyactive");
        }
        else {
            //maak pwh
            $password_hash = password_hash($password, PASSWORD_BCRYPT);
            //update nieuw password
            $sql = "UPDATE `gebruikers` SET `password` = '$password_hash', `active` = 1 WHERE `id` = $id";
    
            if (mysqli_query($conn, $sql))
            {
                header("Location: ./message.php?content=message&alert=success");
                echo $conn, $sql;
            }
            else
            {
                header("Location: ./message.php?content=message&alert=error&id=$id&pwh=$pwh");
            }
            
        }

    }
    else 
    //error
    {
        header("Location: ./message.php?content=message&alert=noidpwhmatch&id=$id&pwh=$pwh");
    }
}
?>