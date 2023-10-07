<?php
$studentscores = [90, 23, 40, 50, 30];

for ($i=0; $i < count($studentscores); $i++) { 
    $studentindex = $i+1;
    echo "Student {$studentindex} score is {$studentscores [$i]} <br>";
}

?>