<?php

if (isset($_GET["delete"])) {

    $id = $_GET["delete"];

    $notes = json_decode(file_get_contents("notes.json"), true);

    $newNotes = [];

    foreach ($notes as $note) {

        if ($note["id"] == $id) {

            if ($note["image"] != "") {
                unlink("uploads/" . $note["image"]);
            }

        } else {

            $newNotes[] = $note;
        }
    }

    file_put_contents("notes.json", json_encode($newNotes, JSON_PRETTY_PRINT));

    header("Location: delete.php");
    exit();
}

?>


<!DOCTYPE html>
<html>

<head>
    <title>Delete Notes</title>
</head>

<body>

    <center>

        <h2>My Notes</h2>

        <p>Press <b>Backspace</b> to return to Home</p>

        <hr>
        <?php

        $notes = json_decode(file_get_contents("notes.json"), true);

        if (empty($notes)) {

            echo "<p>No notes available.</p>";

        } else {

            echo "<table border='3' cellpadding='10' cellspacing='10'>";

            $count = 0;

            foreach ($notes as $note) {

                if ($count % 3 == 0) {
                    echo "<tr>";
                }

                echo "<td align='center' valign='top' width='250'>";

                echo "<p>" . nl2br($note["text"]) . "</p>";

                if ($note["image"] != "") {

                    echo "<img src='uploads/" . $note["image"] . "' width='220' height='160'>";

                    echo "<br><br>";
                }

                echo "<small>" . $note["date"] . "</small>";

                echo "<br><br>";

                echo "<a href='delete.php?delete=" . $note["id"] . "'>Delete</a>";

                echo "</td>";

                $count++;

                if ($count % 3 == 0) {
                    echo "</tr>";
                }
            }

            if ($count % 3 != 0) {
                echo "</tr>";
            }

            echo "</table>";
        }

        ?>
    </center>

    <script>
    document.addEventListener("keydown", function(event) {

        if (event.key === "Backspace") {

            event.preventDefault();

            window.location.href = "index.php";
        }

    });
    </script>

</body>

</html>