<?php

$conn = mysqli_connect("localhost","root","","database_2");
if(!$conn)
    {
        die("connection failed : ".mysqli_connect_error());
    }
    if(isset($_POST["submit"]))
        {
            $id = $_POST["id"];
            $email = $_POST["email"];
            if(mysqli_query($conn,"UPDATE employee SET email ='$email' WHERE id = '$id'"))
                {
                    echo "record update successfully";
                }
            else{
                    echo "error";
                }
            
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>UPDATE EMPLOYEE</title>
</head>
<body>
    <form method = "POST">
        id<input type="text" name="id">
        <br><br>
        email<input type="email"name="email">
        <br><br>
        <button type = "submit" name="submit">submit</button>
        <br><br>
        <a href="select.php">view employee</a>
    </form>
</body>
</html>