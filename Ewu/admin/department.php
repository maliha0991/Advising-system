
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
    $name = $_POST["name"];
    $code = $_POST["code"];
    
    if($connection){
    $sql  = "insert into department values ('', '$name', '$code')";
    
    $sql1 = mysqli_query($connection, $sql);
    
    if($sql1){
        echo "Records added successfully";
       
        
    }else{
        echo "Not added";
    }
        mysqli_close($connection);
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
             Department
         </title>
    </head>
    <body style="background-color:pink">
        <center>
        
            <a href="index.php"><b>Home</b></a>
            
        <h1 >Admin Panel</h1>
            
        <br>
           <a href="course.php">Approve Course</a>
        <a href="register.php">Admin Registration</a>
            
        <a href="department.php">Add Department</a>
        
        <h1>Add Department
        </h1>
        
         
            
        <form method="post" >
            
           
            <label for="name"><b>Department Name :</b></label>
            <input type="text" name="name" size="25" id="name" placeholder="Enter Your Department Name" autofocus>
            <br>
            <br>
            
            
             <label for="code"><b>Department Code :</b></label>
            <input type="text" name="code" size="25" id="code" min="8" placeholder="Enter Your Department Code">
           
            <br>
            <br>
            
            
            <input type="submit" value="submit">
            
            
        </form>
        </center>
    </body>
    
</html>