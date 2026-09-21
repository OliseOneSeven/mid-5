<?php

function displayQuestion($number, $name, $question, $options)
{
    ?>

<tr>

    <td>
        <b><?php echo $number . ". " . $question; ?></b>

        <br><br>

        <?php

            foreach ($options as $option) {

                ?>

        <input type="radio" name="<?php echo $name; ?>" value="<?php echo $option; ?>">

        <?php echo $option; ?>

        <br>

        <?php

            }

            ?>

    </td>

</tr>

<?php
}
?>

<form method="POST">

    <center>

        <h2>PHP Quiz</h2>

        <table border="3" cellpadding="10" cellspacing="10">

            <?php

            displayQuestion(1, "q1", "Which programming language is mainly used for server-side web development?", ["HTML", "PHP", "CSS", "MS Word"]);

            displayQuestion(2, "q2", "PHP stands for?", ["Personal Home Page", "Hyper Text Preprocessor", "Programming Home Page", "Private Home Processor"]);

            displayQuestion(3, "q3", "Which PHP statement is used to display output?", ["echo", "printline", "show", "display"]);

            displayQuestion(4, "q4", "Which language is used to create web pages?", ["Java", "Python", "HTML", "C++"]);

            displayQuestion(5, "q5", "What is the default server name used in XAMPP?", ["google.com", "localhost", "php.net", "server"]);
            ?>

            <tr>
                <td align="center">

                    <button type="submit" name="submitQuiz">Submit Quiz</button>

                </td>
            </tr>

        </table>

    </center>

</form>

<?php

$correctAnswers = [
    "q1" => "PHP",
    "q2" => "Hyper Text Preprocessor",
    "q3" => "echo",
    "q4" => "HTML",
    "q5" => "localhost"
];

if (isset($_POST["submitQuiz"])) {

    $score = 0;

    $totalQuestions = count($correctAnswers);

    foreach ($correctAnswers as $question => $answer) {

        if (isset($_POST[$question]) && $_POST[$question] == $answer) {
            $score++;
        }
    }

    echo "<hr>";
    echo "<center>";

    echo "<h2>Quiz Result</h2>";
    echo "<h3>Your Score: $score / $totalQuestions</h3>";

    echo "</center>";
}
?>