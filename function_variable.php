<?php 

function add($a ,$b) {
    echo "Sum:" . ($a + $b). "<br>";
}

function multi($a,$b) {
     echo "Multiplication:". ($a *$b) . "<br>";
}

$action = "add";
$action($a=10,$b=20);

$action = "multi";
$action($a=10,$b=20);


?>