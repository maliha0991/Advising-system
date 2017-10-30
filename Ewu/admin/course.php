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
            Course Catalog Page
         </title>
    </head>
    <body style="background-color:pink">
        <center>
        
        <a href="index.php"><b>Home</b></a>
            
        <a href="register.php"><b>Register</b></a>
        
        <a href="login.php"><b>Login</b></a>
        
        <a href="index.php"><b>Admin</b></a>
        
        <h1>Approve course
        </h1>
        
        <a href="course.php">Approve Course</a>
        <a href="register.php">Admin Registration</a>
            
        <a href="department.php">Add Department</a>
       
           
        </center>
    </body>
    
</html>