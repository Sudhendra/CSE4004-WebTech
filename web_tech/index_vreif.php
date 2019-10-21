<?php
if(isset($_SESSION['email'])){
    header('location:welcome.php');
}

if(!isset($_SESSION['email'])){
    header('location:index.html');
}
?>
