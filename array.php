<?php
    //array = "variable" which can hold more than one value at a time

    // $food_1 = "apple";
    // $food_2 = "orange"; 
    // $food_3 = ....

$food = array("apple", "orange", "banana", "coconut");

echo $foods[0] . "<br>";
echo $foods[1] . "<br>";
echo $foods[2] . "<br>";
echo $foods[3] . "<br>";
// echo $foods[4] . "<br>"; undefined array

foreach($foods as $food){
    echo $food . "<br>";
}
// associative array = An array made of key => value pairs
?>