<?php 

$products = [
    101 => [
        "name" => "Laptop",
        "price" => 112000,
        "quantity" => 10
    ],
    102 => [
        "name" => "Mobile",
        "price" => 50000,
        "quantity" => 20
    ],
    103 => [
        "name" => "Tables",
        "price" => 2000,
        "quantity" => 15
    ],
    104 => [
        "name"  => "Mouse",
        "price" => 500,
        "quantity" => 50
    ]
];

// Clean variable names: $id (101, 102) => $item (Product array)
foreach ($products as $id => $item) {
    echo "<b> Id: </b> " . $id . "<br>";
    echo "<b> Name: </b>" . $item['name'] . "<br>";
    echo "<b> Price: </b> ₹" . $item["price"] . "<br>";

    // Quantity check karna stock status ke liye
    if ($item['quantity'] > 0) {
        echo "<b> Status: </b> In Stock (" . $item['quantity'] . " left)<br>";
    } else {
        echo "<b> Status: </b> Out of Stock<br>";
    }

    echo "<hr>";
}


$students = [
    "STU01" => [
        "name" => "Rahul",
        "marks" => 85,
        "attendance" => 90
    ],
    "STU02" => [
        "name" => "Aman",
        "marks" => 33,
        "attendance" => 65
    ],
    "STU03" => [
        "name" => "Priya",
        "marks" => 92,
        "attendance" => 95
    ]
];

// Loop se print karna
foreach ($students as $id => $student) {
    echo "<b>Student ID:</b> " . $id . "<br>";
    echo "<b>Name:</b> " . $student["name"] . "<br>";
    echo "<b>Marks:</b> " . $student["marks"] . "/100<br>";

    // Marks ke hisab se Pass / Fail logic
    if ($student["marks"] >= 40) {
        echo "<b>Result:</b> <span style='color:green;'>Pass</span><br>";
    } else {
        echo "<b>Result:</b> <span style='color:red;'>Fail</span><br>";
    }

    echo "<hr>";
}

?>