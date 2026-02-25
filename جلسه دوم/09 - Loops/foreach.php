<?php
// exer 1

// $scores = array(19,14,15,20,12,18,10,7);
// $score_length = count($scores);
// $avg = 0;
// $max_score = 0;
// foreach($scores as $score){
//     $avg = $avg + $score / $score_length;
//     if($max_score < $score){
//         $max_score = $score;
//     }
//     if($score > 15){
//         echo $score . " ";
//     }

// }
// echo "<br>";
// echo $avg;
// echo "<br>";
// echo $max_score;

// exer 2

$ages = array("Mahdi" => 22, "Ali" => 19, "Mohammad" => 35, "Hamdam" => 5, "Tahereh" => 65, "Hana" => 2);
$age_length = count($ages);
$avg = 0;
foreach ($ages as $name => $age) {
    if ($age > 21) {
        echo $name . " :" . $age . "<br>";
    }
    $avg += $age / $age_length;
}
echo "<br>" . $avg;
