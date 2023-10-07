<?php

$studentdata = [
    [
        'id' => 1220,
        'first_name' => 'Lina',
        'last_name' => 'Karolina',
        'gender' => 'female',
        'exam_score' => 78,
        'quiz_score' => 80,
    ],
    [
        'id' => 1221,
        'first_name' => 'Kidi',
        'last_name' => 'Alan',
        'gender' => 'male',
        'exam_score' => 77,
        'quiz_score' => 79,
    ],
    [
        'id' => 1222,
        'first_name' => 'Amar',
        'last_name' => 'Tanjung',
        'gender' => 'male',
        'exam_score' => 92,
        'quiz_score' => 85,
    ],
    [
        'id' => 1223,
        'first_name' => 'Pandu',
        'last_name' => 'Ginanjar',
        'gender' => 'male',
        'exam_score' => 84,
        'quiz_score' => 84,
    ],
    [
        'id' => 1224,
        'first_name' => 'Lili',
        'last_name' => 'Pertiwi',
        'gender' => 'female',
        'exam_score' => 63,
        'quiz_score' => 81,
    ],
    [
        'id' => 1225,
        'first_name' => 'Wirni',
        'last_name' => 'Asih',
        'gender' => 'female',
        'exam_score' => 80,
        'quiz_score' => 91,
    ],










    // $id => [1220, 1221, 1222, 1223, 1224, 1225],
// $first_name => ["Lina", "Kidi", "Amar", "Pandu", "Lili", "Wirni"],
// $last_name => ["Karolina", "Alan", "Tanjung", "Ginanjar", "Pertiwi", "Asih"],
// $gender => ["female", "male", "male", "male", "female", "female"], 
// $quiz_score => [80, 79, 85, 84, 81, 91],
];

function concate_full_name(string $first_name, string $last_name) : string{
    $completename = $first_name . " " . $last_name;
    return $completename;
}

function get_final_score_status(int $exam_score, int $quiz_score) : string {
    if ($exam_score > 80 and $quiz_score > 82) {
        return "Passed";
    } elseif ($exam_score > 80 and $quiz_score <= 82) {
        return "Not passed, take new quiz";
    } elseif ($exam_score <= 80 and $quiz_score > 82) {
        return "Not passed, take remedial exam!";
    } else {
        return "Not passed, try next semester!";
    }
}
// $exam_score = [78, 77, 92, 84, 63, 80];

// $examsum = array_sum($exam_score);


// $examavg = $examsum / count($exam_score);

// $quiz_score = [80, 79, 85, 84, 81, 91];

// $quizsum = array_sum($quiz_score);


// $quizavg = $quizsum / count($quiz_score);


$examScores = array_column($studentdata, 'exam_score');
$quizScores = array_column($studentdata, 'quiz_score');

$examavg = array_sum($examScores) / count($examScores);
$quizavg = array_sum($quizScores) / count($quizScores);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students Final Scores with Functions</title>
</head>
<body>
    <h1>Students Final Scores with Functions</h1>
    <p>List of the students score!</p>
    <ol>
        <?php 
        // foreach ($exam_score as $studentindex => $score) {
        //     echo "<li>Student" . ($index + 1) . "'s score is $score.</li>";
        // }
        for ($i=0; $i < count($studentdata); $i++) { 
            $studentindex = $i+1;
            echo "$studentindex" .
            concate_full_name($studentdata[$i]['first_name'], $studentdata[$i]['last_name']) . 
            ", student with id " . $studentdata[$i]['id'] . 
            ". Your final scores status is " . get_final_score_status($studentdata[$i]['exam_score'],  $studentdata[$i]['quiz_score']) . 
            "<br><br>";
            
        }
        ?>
    </ol>
    <p>Average of exam score is <b><?= $examavg ?></b>

and average of quiz score is <b><?= $quizavg ?></b>.</p>
</body>
</html>