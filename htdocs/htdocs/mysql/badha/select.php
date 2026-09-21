<?php

$conn = mysqli_connect("localhost","root","","database_2");
if(!$conn)
    {
        die("connection failed : ".mysqli_connect_error());
    }
$result = mysqli_query($conn,"SELECT id,name,email FROM employee ORDER BY id");
?>
<!DOCTYPE html>
<head>
    
    <title>SELECT EMPLOYEE</title>
</head>
<body>
    <h2>VIEW EMPLOYEE</h2>
    <a href="insert.php">add employee</a>
    

<?php
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
?>
</body>
</html>
<?php
    if($result)
        {
            mysqli_free_result($result);
        }
mysqli_close($conn);
?>