<?

$enteredPins = [1111, 2222, 5555 , 6666];
$correctPin = 5555;


foreach($enteredPins as $index =>$pin){
    $attempts = $index + 1;



    if($pin != $correctPin) {
        echo "Attempt $attempt: Galat PIN ($pin) ❌<br>";
        continue;
    }

    echo "Attempt $attempt: Sahi PIN mil gaya! ($pin) ✅<br>";
    break;

}




php?>