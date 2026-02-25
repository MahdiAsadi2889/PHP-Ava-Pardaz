<form method="post">
    <input type="number" name="start">
    <input type="number" name="end">
    <button type="submit">submit</button>
</form>
<?php
// exer 1

// $num = 100;
// while ($num > 0) {
//     echo $num . "<br>";
//     $num /= 2;
// }

// exer 2

// $num = "1357";
// $str = str_split($num);

// $sum = 0;
// $i = 0;

// while ($i < count($str)) {
//     $sum += (int) $str[$i];
//     $i++;
// }
// echo "Sum Number is: " . $sum;


// exer 3

$start = $_POST("start");
$end = $_POST("end");
$odd_nums = array();
$even_nums = array();



while ($start <= $end) {
    if ($start % 2 == 0) {
        $even_nums += $start;
    }
    elseif( $start % 2 == 1) {
        $odd_nums += $start;
    }
    $start++;
}


