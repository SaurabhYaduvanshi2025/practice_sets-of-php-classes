<?php 
// $cart = ["Tshirt" => 1000, "Jeans" => 2000, "Shoes" => 3000];

// $total = 0;

// foreach($cart as $item => $price) {
//     $total += $price;
// }

// echo "Total price of items in the cart:" . $total;


// $stock = ["iphone" => 10, "samsung" => 5, "oppo" => 8];



// $available_stock = 0;

//             foreach($stock as $item => $qty) {
//                 $available_stock += $qty;
//             }

//      if ($stock["iphone"] > 0) {
//         echo "iphone is available in stock";
//      } else {
//         echo "iphone is not available in stock";
//      }



$stock = ["iphone" => 10, "samsung" => 0, "oppo" => 8];

foreach ($stock as $item => $qty) {
    if ($qty > 0) {
        echo $item . ": In Stock<br>";
    } else {
        echo $item . ": Out of Stock<br>";
    }
}
?>