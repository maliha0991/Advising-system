<?php
$connection = mysqli_connect("localhost", "root", "", "ewu");

if($_POST){
    
    $username = $_POST["username"];
    $password = $_POST["password"];
   
    $sql  = "SELECT * FROM admin WHERE username='$username' AND pasword='$password'";
    
    $sql1 = mysqli_query($connection, $sql);
    
    $num = mysqli_num_rows($sql1);
    
    if($num==0){
        echo "user not found
        <br>";
    }
    else{
        session_start();
        $_SESSION["login"]="admin";
        $record = mysqli_fetch_assoc($sql1);
        $_SESSION["userid"]=$record['adminid'];
        header("location:index.php");
        
    }
}
    


?>
<!DOCTYPE html>
<html>
    <head>
         <title>
             Admin Login Page
         </title>
    </head>
    <body style="background-color:pink">
        <center>
        
        <a href="index.php"><b>Home</b></a>
            
        <a href="register.php"><b>Register</b></a>
        
        <h1>Admin Login
        </h1>
            <br>
            
       
            
        <form method="post" >
            
            <label for="username"><b>User Name :</b></label>
            <input type="text" name="username"  placeholder="Enter Your User Name"  autofocus>
            <br>
            <br>
            
            
             <label for="password"><b>Password :</b></label>
            <input type="password" name="password"  min="8" placeholder="*********" >
            <br>
            <br>
            
            <button>login</button>
        </form>
        </center>
    </body>
    
</html>