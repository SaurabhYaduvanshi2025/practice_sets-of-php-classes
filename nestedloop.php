<?php 

// for ($i = 0; $i <=4; $i++) {

//     for($row = 1; $row<=4; $row++) {

//         echo ($row.$col) . "<br>";



//     }

//       echo "<br>";


// }


// for ($i= 0 ; $i <=5; $i++){

//          for ($j = 0 ; $j<= $i ; $j++){
//             echo "*";
//          }

//        echo "<br>";

// }


$categories = [
    "Electronics" => ["Mobile", "Laptop", "Tablet"],
    "Clothing" => ["Shirt", "Pants", "Shoes"],
];

foreach($categories as $category => $items){
    echo "<h2>$category</h2>";
    
    foreach ($items as $item) {
        echo "$item";
    }

}

   






?>
