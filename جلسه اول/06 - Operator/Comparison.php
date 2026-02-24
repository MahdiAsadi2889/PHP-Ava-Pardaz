<?php
$a = 10;
$b = "10";
$c = 5;
$d = 20;

var_dump($a == $b); // true
echo "<br>";
var_dump($a === $b); // false
echo "<br>";
var_dump($a != $b); // false
echo "<br>";
var_dump($a !== $b); // true
echo "<br>";
var_dump($a > $c); // true
echo "<br>";
var_dump($a < $c); // false
echo "<br>";
var_dump($a >= $d); // false
echo "<br>";
var_dump($a <= $d); // true

?>