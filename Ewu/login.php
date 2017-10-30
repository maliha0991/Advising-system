<!DOCTYPE html>
<html>
    <head>
         <title>
             Login Page
         </title>
    </head>
    <body style="background-color:palegreen">
        <center>
            
        <a href="index.php"><b>Home</b></a>
        
        <a href="register.php"><b>Register</b></a>
        

        <h3>Enter Name and Password to login:
        </h3>
        
        <form method="post" action="user.php">
            <label for="id"><b>ID :</b></label>
            <input type="text" name="id" size="22"  placeholder="Enter Your Id" autofocus>
            <br>
            <br>
            
             <label for="password"><b>Password :</b></label>
            <input type="text" name="password"  size="15" min="8" placeholder="*********">
            <br>
            <br>
            <input type="submit" value="login">
            
        </form>
        </center>
    </body>
    
</html>