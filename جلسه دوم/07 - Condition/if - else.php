<?php
// simple authorization
// -----------------------------
// $username = "admin";
// $password = "1234";
// $is_Active = true;

// if($username === "" || $password === ""){
//     echo "Please Fill All Feilds";
// }
// elseif($username !== "admin"){
//     echo "invalid username";
// }
// elseif($password !== "1234"){
//     echo "incorrect password";
// }
// elseif($username === "admin" && $password === "1234"){
//     if($is_Active === true){
//         echo "Welcome to Panel";
//     }
//     else{
//         echo "User is DisActive";
//     }
// }

// -----------------------------

// score exam

// -----------------------------

$score = 53;
if($score >= 90 && $score <= 100){
    echo "Grade A";
}
elseif($score >= 80 && $score < 90){
    echo "Grade B";
}
elseif($score >= 70 && $score < 80){
    echo "Grade C";
}
elseif($score >= 60 && $score < 70){
    echo "Grade D";
}
elseif($score < 60){
    echo "Grade F";
    if($score >= 55){
        echo "You'r Passed Exam";
    }
    else {
        echo "You'r Failing the Exam";
    }
}

// -----------------------------

?>