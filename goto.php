<?php 

// $age = 21;

// if ($age <= 18) {

//    goto minor;
// }

// echo "Your are Eligible to vote.";
// exit;



// minor:
// echo "You are not Eligible to vote.";



for ($i = 0; $i <=10; $i++) {
    if ($i == 6){
        goto Stop;
    }
    echo "Number:" . $i . "<br>";
}

Stop:
echo "Loop stopped at number 4.";

?>