<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <center>

    <h1>image galary</h1>
    <h2>navigation</h2>
    <p>press<b>1</b>upload image</p>
    <p>press<b>2</b>delete image</p>
    <hr>
    <a href = "upload.php">upload</a>
    <br><br>
    <a href = "delete.php">delete</a> 
</center>

<script>
    document.addEventListener("keydownf",function(event) {
    if(event.key === "1")
    {
        window.location.href = "upload.php";
    }
    if (event.key === "2")
    {
        window.location.href = "delete.php";
    }
    });
</script>

    
</body>
</html>