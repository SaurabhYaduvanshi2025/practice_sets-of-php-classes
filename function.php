<?php 


// function add($a ,  $b) {
//     echo $a + $b . "<br>";
// }

// add ("40",  "20");




function  checkGrade($marks) {
    if ($marks >= 90) {
        echo "A+";
    } elseif ($marks >= 80) {
        echo "A";
    } elseif ($marks >= 70) {
        echo "B";
    } elseif ($marks >= 60) {
        echo "C";
    } elseif ($marks >= 50) {
        echo "D";
    } else {
        echo "F";
    }
}

echo checkGrade(85); echo "<br>";
echo checkGrade(0); echo "<br>";


?>