<?php
$score = 0;
do {
    echo "Game over Your score is: $score" . "<br>";
     $score += 10;
} while ($score <= 100);



?>


<br>

<?php 

$attempt = 0;
$display = 0;
 
do{
  $display = rand (1, 10);
  $attempt++;

  echo "Attempt: $attempt - Displayed number: $display" . "<br>";
}while ($display != 10);

echo "<strong>It took $attempt attempts to display the number 10.</strong>" . "<br>";


?>