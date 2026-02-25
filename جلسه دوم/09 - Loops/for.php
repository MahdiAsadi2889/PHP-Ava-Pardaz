<?php
// exer 1

// $number = 10;
// $total_numbers = 0;
// $total_even_number = 0;
// $total_odd_number = 0;
// for ($i = 1; $i <= $number; $i++) {
//     $total_numbers += $i;
//     if ($i % 2 == 0) {
//         $total_even_number += $i;
//     } elseif ($i % 2 == 1) {
//         $total_odd_number += $i;
//     }
// }
// echo $total_numbers . "<br>";
// echo $total_even_number . "<br>";
// echo $total_odd_number . "<br>";

// -----------------------------

// exer 2

// $stars = 5;

// for ($i = 1; $i <= $stars; $i++) {
//     for ($j = 1; $j <= $i; $j++) {
//         echo "*";
//     }
//     echo "<br>";
// }

// -----------------------------

// exer 3


for ($i = 1; $i <= 10; $i++) {
    for ($j = 1; $j <= 10; $j++) {
        $total = $i * $j;
        echo " " . $total . " ";
    }
    echo "<br>";
}
