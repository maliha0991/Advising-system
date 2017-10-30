 <?php
             $connection = mysqli_connect("localhost", "root", "", "ewu");
            
            if($_POST){
                
                $UserId = $_POST["id"];
                $UserPassword = $_POST["password"];
                $UserEmail = $_POST["email"];
                $UserPhone = $_POST["phone"];
            
           
            
            $sql = "insert into user values('', '$UserId', '$UserPassword', '$UserEmail', '$UserPhone')";
            
            $sql1 = mysqli_query($connection, "$sql");
                if($sql1){
                    echo "Records added successfully";
                }
            }
            
            ?>
            
<!DOCTYPE html>
<html>
    <head>
         <title>
            Registration Page
         </title>
    </head>
    <body style="background-color:palegreen">
        <center>
        
        <a href="index.php"><b>Home</b></a>
            
        <a href="login.php"><b>Login</b></a>
        
        
        <h1>User Registration
        </h1>
        
        <form method="post">
            <label for="id"><b>University ID :</b></label>
            <input type="text" name="id" id="id" placeholder="Enter Your Id"  autofocus>
            <br>
            <br>
            
            
             <label for="password"><b>Password :</b></label>
            <input type="text" name="password"  id="password" min="8" placeholder="*********" >
          
            <br>
            <br>
            
            <label for="email"><b>Email :</b></label>
            <input type="text" name="email" id="email" placeholder="Enter Your Email  Id" >
            <br>
            <br>
        
            <label for="phone"><b>Phone :</b></label>
            <input type="text" name="phone" id="phone" placeholder="Enter Your Phone No" >
            <br>
            <br>
            
            <input type="submit" value="register">
            <input type="button" value="reset">
            
       
            
        </form>
        </center>
    </body>
    
</html>