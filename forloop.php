<?php 

for ($i = 1; $i <= 10; $i++) {
    echo "Number: $i . <br>";
}


?>


<br>


<?php 

   $projects = ["Inventory system", "E-commerce webiste" , "Portfolio webiste", "Blog webiste" ];



     $totalprojects = count($projects);


     for($i = 0; $i < $totalprojects; $i++) {
        echo "Project: " . ($i +1) . "<br>";
     }


?>