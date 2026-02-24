<?php

// exer 1

$countries = array("Iran","Iraq","Russia","America","France","England","Turkey","Germany","Italy","Netherland");
// method 1
// -------------
// echo $countries[0];
// echo $countries[1];
// echo $countries[2];
// echo $countries[3];
// echo $countries[4];
// echo $countries[5];
// echo $countries[6];
// echo $countries[7];
// echo $countries[8];
// echo $countries[9];

// method 2
// -------------------

$res = implode(' ',$countries);

echo $res;


// exer 2

echo "<br>";

$jobs = array("Mohamamd Hassan" => "WordPress Developer","Mohammad Mahdi"=> "Software Developer","Reza"=> "Designer","Amir"=>"Product Manager","Fazel"=>"Back-End Developer");

echo "Jobs of Mohammad Hassan is : " . $jobs["Mohamamd Hassan"];
echo "<br>";
echo "Jobs of Mohammad Mahdi is : " . $jobs["Mohammad Mahdi"];
echo "<br>";
echo "Jobs of Reza is : " . $jobs["Reza"];
echo "<br>";
echo "Jobs of Amir is : " . $jobs["Amir"];
echo "<br>";
echo "Jobs of Fazel is : " . $jobs["Fazel"];
echo "<br>";



// exer 3

$lang = array("fa"=> "Farsi","en"=>"British",'fr'=>'France');


echo "fa meaning is : " . $lang["fa"];
echo "<br>";
echo "en meaning is : " . $lang["en"];
echo "<br>";
echo "fr meaning is : " . $lang["fr"];
?>