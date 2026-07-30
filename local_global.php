<?php 
// function myTest(){
//      $x = 20;
//      echo "Function are declared in x value: $x <br>";
// }

// myTest();


$y = 20;

function myTest() {

  global $y;

  echo"this global declare for local variable y: $y  <br>";

}

myTest();

echo"this variable for global varibale y: $y";

?>