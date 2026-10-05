<?php 
// function myTest(){
//      $x = 20;
//      echo "Function are declared in x value: $x <br>";
// }

// myTest();


// $y = 20;

// function myTest() {

//   global $y;

//   echo"this global declare for local variable y: $y  <br>";

// }

// myTest();

// echo"this variable for global varibale y: $y";

// $country = "India";
// function country(){
//   global $country;
//   echo "this is our Country Name: $country  <br>" ;
//   // country();

// }
//   country();

// function myTest(){
   
//    $static = "This is Static variable Writen by Saurabh";
//    echo $static . "<br>";
// }

// myTest();



// $count = 5;

// function  myNumber(){
//   global $count;

//   $count += 10;
// }
// myNumber();
// echo $count;

// $a = 10;
// $b = 50;

// function myTest(){

//   global $a, $b;
//   echo $c = $a + $b;
// }
// myTest();



// function mytest(){
//   return $GLOBALS['a'] + $GLOBALS['b'];
// }
// echo mytest();

$users = [
    ["name" => "Saurabh", "email" => "saurabh@gmail.com"],
    ["name" => "Amit", "email" => "amit@gmail.com"]
];

foreach($users as $user){
  echo "Name:" . $user['name'] . " Email: " . $user['email'] . "<br>";
  echo "Name:" . $user['name'] . " Email: " . $user['email'] . "<br>";
}



?>