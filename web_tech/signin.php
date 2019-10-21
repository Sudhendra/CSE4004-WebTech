<?php
session_start();
if (isset($_POST['signin']))
{
    include 'config.php';
    $conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME); 
    $error1 ='';
    $email = $_POST['email'];
    $password = $_POST['Password'];

    $SELECT = "SELECT email, password FROM users WHERE email = ? AND password = ?";

    $stmt = $conn->prepare($SELECT);
    $stmt -> bind_param("ss", $email, $password);
    $stmt -> execute();
    $stmt -> bind_result($email, $password);
    $stmt -> store_result();
    $rnum = $stmt-> num_rows;

    /* while($row=mysqli_fetch_assoc($result1))
    {
        $check_email = $row['email'];
        $check_password = $row['password'];
    } */
    //$email == $check_email && $password == $check_password
    if ($rnum > 0)
    {
        header('Location: http://localhost/web_tech/home.html');
        unset($email);
        mysqli_close($conn);
        die();
    }
    else
    {
        $error1 = "Email/Password is incorrect.";
        header('Location: http://localhost/web_tech/index.php');
        die();
       // mysqli_close();
    }
    

}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Main Page</title><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </head>
    <body>
        <h1>WELCOME!</h1>
    </body>
</html>