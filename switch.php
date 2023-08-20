<?php
$date = date("1");

$date = "Pizza";

switch($date){
    case "Monday":
        echo "I hate Mondays";
        break;
    case "Tuesday":
        echo "It is Taco Tuesday";
        break;
    case "Wednesday":
        echo "The work week is half over";
        break;
    case "Thursday":
        echo "It's almost the weekend";
        break;
    case "Friday":
        echo "Time to party";
        break;
    case "Sunday":
        echo "Time to relax";
        break;
    default:
        echo "{$date} is not a day";

    //for loop
    // for($i=0;$i<5;$i++){
    // echo $i . "<br>";
    //}
}
?>