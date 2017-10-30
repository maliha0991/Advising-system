<!DOCTYPE html>
<html>
    <head>
         <title>
            Course Catalog
         </title>
    </head>
    <body style="background-color:palegreen">
        <center>
            
        <a href="index.php"><b>Home</b></a>
            
        <a href="register.php"><b>Register</b></a>
        
        <a href="login.php"><b>Login</b></a>
        
        <a href="admin/login.php"><b>Admin</b></a>
        
        <h1>Add Course
        </h1>
        
        <form method="get" action="course.php">
            
            <label for="coursecode"><b>Course Code :</b></label>
            <input type="text" name="coursecode"  placeholder="Enter Course Code" required autofocus>
            <br>
            <br>
            
            <label for="coursename"><b>Course Name :</b></label>
            <input type="text" name="coursename" placeholder="Enter Course Name" required>
            <br>
            <br>
        
            <label for="description"><b>Description :</b></label>
            <textarea name="description"  id="description"></textarea>
            <br>
            <br>
            
             <label for="credit"><b>Credit :</b></label>
            <input type="text" name="credit"    required>
            <br>
            <br>
            
             <label for="prerequisite"><b>Pre-requisite :</b></label>
            <input type="text" name="prerequisite" placeholder="Enter Pre-requisite of the Course"  required>
            <br>
            <br>
            
            
            
            
            <input type="button" value="submit">
            <input type="button" value="reset">
            
        </form>
        </center>
    </body>
    
</html>