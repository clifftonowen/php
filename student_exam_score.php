<!-- Back-end -->
<?php
$exam_score = [78, 77, 92, 84, 63, 80];


$sum = array_sum($exam_score);


$avg = $sum / count($exam_score);

?>

<!-- Front-end -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final Scores of Students</title>
</head>
<body>
    <h1>Students Exam Score</h1>
    <p>List of the students score!</p>
    <ol>
        <?php 
        foreach ($exam_score as $studentindex => $score) {
            echo "<li>Student" . ($index + 1) . "'s score is $score.</li>";
        }
        // for ($i=0; $i < count($exam_score); $i++) { 
        //     $studentindex = $i+1;
        //     echo "$studentindex. Student$studentindex's score is $exam_score[$i] <br><br>";
        // }
        ?>
    </ol>
    <p>Average of exam score is <b><?= $avg ?></b></p>
</body>
</html>