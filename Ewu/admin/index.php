<?php
   if(!isset($_SESSION)){
       session_start();
   }

   if($_SESSION["login"]!="admin"){
       header("location:login.php");
   }
   
 
?>
<!DOCTYPE html>
<html>
    <head>
         <title>
             EWU | Course Catalog
         </title>
    </head>
    <body style="background-color:pink">
        <center>
        
            <a href="../index.php"><b><big>Home</big></b></a>
            
            <a href="login.php"><b><big>Login</big></b></a>
        
            <a href="register.php"><b><big>Registration</big></b></a>
            
            
         <a href="index.php"><b><big>Admin</big></b></a>
        <a href="logout.php"><b><big>Logout</big></b></a>
        <h1>Admin Panel
        </h1>
            
        <a href="course.php">Approve Course</a>
        <a href="register.php">Admin Registration</a>
            
        <a href="department.php">Add Department</a>
       
        </center>
    </body>
    
</html>