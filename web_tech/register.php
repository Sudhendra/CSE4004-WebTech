<?php
session_start();
include 'config.php';
    if (isset($_POST['submit']))
    {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['Password'];

       if (!empty($firstname) || !empty($lastname) || !empty($email) || !empty($password))
       {
           $conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME); 
           if (mysqli_connect_error())
           {
               die('Connect Error ('.mysqli_connect_errorno().')'. mysqli_connect_error());
           }      
           else
           {
               $SELECT = "SELECT email From users Where email=? Limit 1";
               $INSERT = "INSERT INTO users (firstname, lastname, email, password) values(?,?,?,?)";

               $stmt = $conn -> prepare($SELECT);
               $stmt -> bind_param("s", $email);
               $stmt -> execute();
               $stmt -> bind_result($email);
               $stmt -> store_result();
               $rnum = $stmt-> num_rows;

               if ($rnum==0)
               {
                   $stmt -> close();
                
                   $sql = "INSERT INTO users values (NULL,'$firstname', '$lastname', '$email', '$password');";
                   $var = mysqli_query($conn,$sql) or die ('error: ' . mysqli_error($conn));
                   if ($var)
                   {
                       header('Location: http://localhost/web_tech/index.php');
                       mysqli_close($conn);
                   }
                   else
                   {
                    header('Location: http://localhost/web_tech/register.php');
                       echo "Query Failed";
                   }
               }
               else
               {
                header('Location: http://localhost/web_tech/register.php');
                //error!!                   
               }
               $stmt -> close();
               $conn -> close();
           } 
       }
       else{
           echo "All fields are required!";
           die();
       }


    }        
?>