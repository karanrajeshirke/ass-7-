<?php



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'connect.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `registeration` WHERE username = '$username' AND password='$password'";
      
    $result=mysqli_query($con,$sql);

    if($result)
    {
        $num=mysqli_num_rows($result);

        if($num>0)
        {
            session_start();
            $_SESSION['username']=$username;

            header('location:home.php');
        }
        else
        {
            echo "invalid credentials";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>

    <h1>Login Form</h1>

    <form action="login.php" method="post">
        Username: <input type="text" name="username">
        Password: <input type="password" name="password" >

        <button type="submit">Login</button>
    </form>
    
</body>
</html>
