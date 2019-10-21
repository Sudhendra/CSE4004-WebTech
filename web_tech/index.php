<?php
if(isset($_SESSION['email'])){
    header('location:home.html');
}

if(isset($_SESSION['email'])){
    header('location:index.php');
}
?>


<!DOCTYPE html>
<html>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
        <link rel="stylesheet" href="index.css" type="text/css">
    <head>
        <title>Welcome</title>
    </head>
    <body>
        <div class="page-container">
    
                <form action="signin.php" method="POST">
                        <h3>Sign In</h3><br>
                        <input class="email" type="text" placeholder="Email address" name="email" required>
                        <input class="password" type="password" placeholder="Password" name="Password" required>
                        <input class="signin" type="submit" value="Sign In" name="signin">
                        <script type = "text/javascript">
                            //alert('HEllo');
                        </script>
                </form>
        </div>

        <div class="newuser">
            <form action="register.html" method="POST">
                <br><br>
                <p>New user?</p>
                <input class="signup" type="submit" value="Sign Up" name="register">
            </form>
        </div>
        
    </body>
</html>