<?php
session_start();

if(!isset($_SESSION['username']))
{
    //NOT LOGGED IN 
    header('location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome 

    <?php

    echo $_SESSION['username'];

    ?>


    <div>
        <div>
            Heelo how are you?
        </div>
    </div>
    </h1>

<a href="logout.php">Logout</a>



</body>
</html>