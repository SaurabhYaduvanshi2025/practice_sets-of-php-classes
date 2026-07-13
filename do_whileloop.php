<?php
$score = 0;
do {
    echo "Game over Your score is: $score" . "<br>";
     $score += 10;
} while ($score <= 100);



?>


<br>

<?php
$attempts = 0;
$diceRoll = 0;

do {
    // 1 se 6 ke beech random number generate hoga
    $diceRoll = rand(1, 6); 
    $attempts++; // Attempt count badhayenge
    
    echo "Attempt $attempts: Rolled a $diceRoll <br>";

} while ($diceRoll != 6); // Jab tak 6 nahi aata, loop chalta rahega

echo "<strong>Success! Got 6 in $attempts attempts.</strong>";
?>