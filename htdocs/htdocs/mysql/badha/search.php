<!DOCTYPE html>
<head>
    
    <title>SELECT EMPLOYEE</title>
</head>
<body>
    <form method= "POST">
    <h2>SEARCH EMPLOYEE</h2>
    search : <input type="text" name="name" placehoder="enter Employee name">
    <br><br>
    <button type="submit"name="submit">search</button>
    <br><br>
    <a href="insert.php">add employee</a>
    <br><br>
</form>
<?php

$conn = mysqli_connect("localhost","root","","database_2");
if(!$conn)
    {
        die("connection failed : ".mysqli_connect_error());
    }
if(isset($_POST["submit"]))
    {
        $name = $_POST["name"];
    
        $result = mysqli_query($conn,"SELECT * FROM employee WHERE name = '$name'");

if($result && mysqli_num_rows($result)>0)
    {
        ?>
        <table border = "3" cellpadding = "10" cellspacing = "10">
            <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>EMAIL</th>
</tr>
        <?php
            while($row = mysqli_fetch_assoc($result))
                {
                    ?>
                        <tr>
                            <td><?php echo $row["id"];?></td>
                            <td><?php echo $row["name"];?></td>
                            <td><?php echo $row["email"];?></td>
                            </tr>
                            
                    <?php
                }?>

        </table>
        <?php
    }
    else{
        ?>
        <b>no data found</b>
        <?php
    }
    }
?>
</body>
</html>
<?php
mysqli_close($conn);
?>