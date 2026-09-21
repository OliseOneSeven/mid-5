<!DOCTYPE html>
<html lang="en">
<head>
    <title>image uploade & carousel</title>
</head>
<body>
    <center>
        <h2>image uploade and carousel</h2>
        <form method = "POST" enctype="multipart/form-data">
            <input type="file" name="image">
            <br><br>
            <button type="submit">submit</button>
        </form>

    </center>

<?php
    if(isset($_FILES["image"]))
        {
            $filename = $_FILES["image"]["name"];
            $tempname = $_FILES["image"]["tmp_name"];
            $originalname = pathinfo($filename,PATHINFO_FILENAME);
            $extention = pathinfo($filename,PATHINFO_EXTENSION);
            if(!is_dir("carousel"))
                {
                    mkdir("carousel");
                }
            date_default_timezone_set("Asia/Kolkata");
            $newfilename = date("Y-m-d-H-s-i")."_".round(microtime(true) * 1000)."_".$originalname.".".$extention;
            $folder = "carousel/".$newfilename;
            if(move_uploaded_file($tempname,$folder))
                {
                    echo "<center><b>image uploaded successfully</b></center>";
                }
            else{
                echo "<center><b>image uploaded failed";
            }
        }

?>
    <hr>
    <h2> stored image</h2>

<?php
    $images=[];
    if(is_dir("carousel"))
        {
            $files = scandir("carousel");
            foreach($files as $file)
                if($file != "." && $file != "..")
                    {
                        $extention = strtolower(pathinfo($file,PATHINFO_EXTENSION));

                        if($extention == "jpg" || $extention == "jpeg" || $extention == 'webp' || $extention == "png")
                            {
                                array_push($images,"carousel/".$file);
                            }
                    }
                    }

if(count($images)>0)
    {
?>
        <img id="carouselid" src="<?php echo $images[0];?>" alt = "uploade image" width = "300">
        <br><br>
        <h2>Total Image</h2>
        <b><?php echo count($images)?></b>

        <script>
            let images = <?php echo json_encode($images) ?>
            let index = 0;
            setInterval(function(){
                index++;
                if(images.length<=index)
                {
                    index = 0;
                }
                document.getElementById("carouselid").src = images[index];
            },200);
        </script>
        <?php
    }
            else{
                echo "no image found in carousel folder";
            }
        ?>


        


</body>
</html>