<?php
// array_combine
// $names = array("Mahdi","Ali","Reza");
// $jobs = array("developer","Teacher","Designer");
// $bio = array_combine($names,$jobs);
// var_dump($bio);

// array_diff

// $array1 = array("b" => "blue", "g" => "green", "r" => "red", "y" => "yellow","c"=>"black");
// $array2 = array("b" => "brown", "g" => "green", "r" => "red");

// var_dump(array_diff($array1, $array2));

// array_diff_key

// $array1 = array("b" => "blue", "g" => "green", "x" => "red", "y" => "yellow","c"=>"black");
// $array2 = array("b" => "brown", "g" => "green", "r" => "red");
// var_dump(array_diff_key($array1, $array2));

// array_diff_assoc

// $array1 = array("b" => "blue", "g" => "green", "z" => "red", "y" => "yellow","c"=>"black");
// $array2 = array("b" => "brown", "g" => "green", "r" => "red");
// var_dump(array_diff_assoc($array1, $array2));

// array_intresect

// $array1 = array("b" => "blue", "g" => "green", "x" => "red", "y" => "yellow","c"=>"black");
// $array2 = array("b" => "brown", "g" => "green", "r" => "red");
// var_dump(array_intersect($array1, $array2));

// array_keys

// $array1 = array("Mahdi"=> "Software Developer", "Amir"=>"Product Manager");
// var_dump(array_keys($array1));

// array_merge

// $names1 = array("Mahdi","Zahra");
// $names2 = array("Ali","Sara");
// var_dump(array_merge($names1,$names2));

// array_pop

// $names = array("Mahdi", "Zahra", "Ali", "Sara");
// array_pop($names);

// var_dump($names);

// array_push

// $names = array("Mahdi", "Zahra", "Ali", "Sara");
// array_push($names,"Reza");

// var_dump($names);

// array_replace

// $car1 = array("bmw","benz");
// $car2 = array("pride","peykan");

// $car1 = array("b"=>"bmw","z"=>"benz");
// $car2 = array("b"=>"pride","peykan");

// var_dump(array_replace($car1,$car2));

// array_reverse

// $animals = array('a'=>"ant", 'b'=>"bear",'c'=>"cat");
// var_dump(array_reverse($animals));

// array_slice

$cars = ['BMW', 'Benz', 'Mazda', 'Pride'];

var_dump(array_slice($cars, 1, 2));
