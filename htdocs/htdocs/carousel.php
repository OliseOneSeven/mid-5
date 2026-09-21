<!DOCTYPE html>
<html>

<head>
    <title>Image Carousel Upload</title>
</head>

<body>

    <h2>Image Upload & Carousel</h2>

    <form method="POST" enctype="multipart/form-data">

        <input type="file" name="image" required>

        <br><br>

        <button type="submit">Upload Image</button>

    </form>

    <hr>

    <?php

    // isset() : Checks whether the variable exists and is not NULL.
    if (isset($_FILES["image"])) {

        // Gets the original uploaded file name.
        $filename = $_FILES["image"]["name"];

        // Gets the temporary file path created by PHP.
        $tempname = $_FILES["image"]["tmp_name"];

        $originalName = pathinfo($filename, PATHINFO_FILENAME);

        $extension = pathinfo($filename, PATHINFO_EXTENSION);

        date_default_timezone_set("Asia/Kolkata");

        $newFilename = date("Y_m_d_H_i_s") . "_" . round(microtime(true) * 1000) . "_" . $originalName . "." . $extension;

        // is_dir() : Checks whether the folder exists.
        // ! (NOT) means the folder does not exist.
        if (!is_dir("carousal")) {

            // mkdir() : Creates a new folder.
            mkdir("carousal");
        }

        $folder = "carousal/" . $newFilename;

        // move_uploaded_file() : Moves uploaded file from temporary folder to destination folder.
        if (move_uploaded_file($tempname, $folder)) {

            // Executes if upload is successful.
            echo "Image Uploaded Successfully.";
        } else {

            // Executes if upload fails.
            echo "Upload Failed.";
        }
    }

    ?>

    <hr>

    <h2>Stored Images</h2>

    <?php

    $images = [];

    if (is_dir("carousal")) {

        $files = scandir("carousal");

        foreach ($files as $file) {

            if ($file != "." && $file != "..") {

                $extension = strtolower(pathinfo($file, PATHINFO_EXTENSION));

                if ($extension == "jpg" || $extension == "jpeg" || $extension == "png" || $extension == "gif" || $extension == "webp") {

                    array_push($images, "carousal/" . $file);
                }
            }
        }
    }   

    if (count($images) > 0) {
    ?>

    <img id="carouselImage" src="<?php echo $images[0]; ?>" alt="Uploaded Image" width="400">

    <br><br>

    Total Images :
    <b><?php echo count($images); ?></b>
    <br>

    <script>
    let images = <?php echo json_encode($images); ?>;

    let index = 0;
    setInterval(function() {

        index++;

        // If last image is reached, start again from the first image.
        if (index >= images.length) {
            index = 0;
        }

        document.getElementById("carouselImage").src = images[index];

    }, 2000);
    </script>

    <?php

    } else {

        // Executes when no images are found in the carousal folder.
        echo "No images found in carousal folder.";
    }

    ?>
</body>

</html>