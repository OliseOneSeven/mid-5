<?php
    $conn = mysqli_connect("localhost","root","","database_2");
    if(!$conn)
        {
            die("connection failed : ".mysqli_connect_error());
        }
    
    if(isset($_POST["add"]))
        {
            $name = $_POST["name"];
            $email = $_POST["email"];

        $result = mysqli_query($conn,"INSERT INTO employee (name,email) VALUES ('$name','$email')");
               if($result) {
                    echo "employee detailed added successfully";
                }
            else
                {
                    echo "employee detaile added failed";
                }
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <title>add employee</title>
</head>
<body>
    <h2> ADD EMOPLOYEE</h2>
    <form method="POST">
        NAME : <input type="text" name = "name" required>
        <br><br>
        EMAIL : <input type="email" name = "email" required>
        <br><br>
        <button type = "submit" name="add">submit</button>
        <br><br>
        <a href = "select.php">view employee</a>
    </form>
</body>
</html>

<?php
mysqli_close($conn)
?>