<?php 

// $fruits = ["Apple", "Banana", "Mango", "Grapes", "Orange","lichi","Pineapple","Papaya","Watermelon","Strawberry"];

// foreach ($fruits as $fruit) {
//     echo $fruit . "<br>";
// }

// $user = [
//     "name" => "Saurabh Yadav",
//     "email" => "saurabh@example.com",
//     "mobilenumber" => "9868037166",
//     "address" => "Delhi nangloi India",
// ];

// foreach ($user as $key => $value) {
//     echo $key . ": " . $value . "<br>";
// }



// $number = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

// $total = 0;

// foreach ($number as $num) {
//     $total = $total + $num;
// }

// echo "total =". $total;

// foreach($number as $number) {
//     if($number%3== 0){
//         echo $number."<br>";
//     }
// }



// $students = [

//     [
//         "name" => "Rahul",
//         "age" => 22,
//         "city" => "Delhi"
//     ],

//     [
//         "name" => "Amit",
//         "age" => 21,
//         "city" => "Mumbai"
//     ],

//     [
//         "name" => "Saurabh",
//         "age" => 25,
//         "city" => "Noida"
//     ]

// ];


// foreach ($students as $student) {
//     echo "Name:" .$student["name"]. "<br>";
//     echo "Age:" .$student["age"]. "<br>";
//     echo "City:" .$student["city"]. "<br>";
//     echo "<br>";
// }


// $company = [
//     "employees" => [
//         [
//             "name" => "Rahul",
//             "skills" => ["PHP", "JavaScript"]
//         ],
//         [
//             "name" => "Amit",
//             "skills" => ["Laravel", "MySQL"]
//         ]
//     ]
// ];


// foreach ($company["employees"] as $employee) {

//     echo  $employee["name"] . "<br>";


//     foreach ($employee["skills"] as $skill) {
//         echo "-" .$skill."<br>";
//     }

//     echo "<br>";

// }


$user = [
    [1,"Saurabh","nangloi","Delhi"],
    [2,"Amit","dwarka","Delhi"],
    [3,"Rahul","rajdhani park","Delhi"],
    [4,"Rohit","nangloi","Delhi"],
    [5,"Ramesh","Piragarihi","Delhi"],
    [6,"Sandeep","uttam nagar","Delhi"],
    [7,"Saurabh Yadav","nangloi","Delhi"],
];



        foreach($user as $users) {
            echo  "ID:" . $users[0] . "<br>";
            echo "Name:" . $users[1] . "<br>";
            echo "Address:" . $users[2] . "<br>";
            echo "City:" . $users[3] . "<br><br>";
        }






?>