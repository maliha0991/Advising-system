<?php
   if(!isset($_SESSION)){
       session_start();
   }

   if($_SESSION["login"]!="admin"){
       header("location:login.php");
   }
   
 
?>
<?php
$connection = mysqli_connect("localhost", "root", "", "ewu");

if($_POST){
    
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $fullname = $_POST["fullname"];
   
    
    $sql  = "insert into admin values ('', '$username', '$password', '$email', '$phone', 'fullname')";
    
    $sql1 = mysqli_query($connection, $sql);
    
    if($sql1){
        echo "Record added successfully";
    }
    else{
        echo "Error";
    }
    
}

?>
<!DOCTYPE html>
<html>
    <head>
         <title>
             Admin Registration Page
         </title>
    </head>
    <body style="background-color:pink">
        <center>
        
            <a href="index.php"><b><big>Home</big></b></a>
            
        
        
            <a href="login.php"><b><big>Login</big></b></a>
        
        
        <h1>Admin Registration Form
        </h1>
        <a href="course.php">Approve Course</a>
        <a href="register.php">Admin Registration</a>
            
        <a href="department.php">Add Department</a>
       <br>
            <br>
            <br>
            
        <form method="post">
            
            <label for="username"><b>User Name :</b></label>
            <input type="text" name="username" id="username" placeholder="Enter Your User Name" autofocus>
            <br>
            <br>
            
            
             <label for="password"><b>Password :</b></label>
            <input type="text" name="password" id="password"  min="8" placeholder="*********" >
            <br>
            <br>
            
            <label for="email"><b>Email :</b></label>
            <input type="text" name="email" id="email" placeholder="Enter Your Email  Id" >
            <br>
            <br>
        
            <label for="phone"><b>Phone :</b></label>
            <input type="text" name="phone"  placeholder="Enter Your Phone No">
            <br>
            <br>
            
             <label for="fullname"><b>Full Name :</b></label>
            <input type="text" name="fullname"  min="8" placeholder="Enter your fullname" >
            <br>
            <br>
            <input type="submit" value="register">
           
            
        </form>
        </center>
    </body>
    
</html>