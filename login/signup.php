<?php
$error1 ='';
$error2 ='';
$error3 ='';
$error4 ='';
$error5='';

if(isset($_GET['err1']))
{
    if($_GET['err1']=='empty_u')
    {
        $error1 = "username required";
    }
    if($_GET['err2']=='empty_p')
    {
        $error2 = "password required";
    }
    if($_GET['err3']=='empty_cp')
    {
        $error3 = "confirm password required";
    }


}

if(isset($_GET['err5']))
{
    if($_GET['err5']=='already')
    {
        $error5 = "user alreday exists";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
        <title>Document</title>
        <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="f">
    <form method="post" action="register.php" >
        <label>username:</label><input type="text" name="un" ><span>*<?php echo $error1;echo $error5; ?></span><br>
        <label>password:</label><input type="password" name="pw"><span>*<?php echo $error2; ?></span><br>
        <label>confirm password:</label><input type="password" name="cpw"><span>*<?php echo $error3;echo $error4;  ?></span><br>
        <input type="submit" value ="Sign-up" name="submit"> <br>

       <div>Already a user: <a href="login.php"> Sign-in </a> </div>
    </form>
</div>
</body>
</html>