<!DOCTYPE html>
<html>
    <head>
         <title>
             EWU | Course Catalog
         </title>
    </head>
    <body style="background-color:palegreen">
        <center>
        <a href="index.php"><b>Home</b></a>
    
        <a href="register.php"><b>Register</b></a>
        
        <a href="login.php"><b>Login</b></a>
        
        <a href="admin/index.php"><b>Admin</b></a>
        
        <h1>EWU | Course Catalog
        </h1>
        <h2>Department Name</h2>
        </center>
        
 <?php
         $connection = mysqli_connect("localhost", "root", "", "ewu");
        
        $sql = "select * from department";
        
        $table = mysqli_query($connection, $sql);
        
        while($record = mysqli_fetch_assoc($table)){
            echo $record["departmentcode"];
            echo " ";
            echo $record["departmentname"];
            echo "<br>";
            
        }
    
    ?>
        
        
    </body>
    
</html>