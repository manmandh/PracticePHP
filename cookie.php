<?php
// cookie = Information about a user stored in a user's web = browser targeted advertisemnets, browsing prefetences, and other non-sensivtive data


setcookie("fav_food", "pizza", time()+ (86400 * 2), "/");
/*
foreach($_COOKIE as $key => $value){
    echo"{$key} = {$value} <br>";
}
*/

if(isset($_COOKIE["fav_food"])){
    echo "BUY SOME {$_COOKIE["fav_food"]} !!!";
}
else{
    echo "I don't know your favourite food";
}

//SESSION
?>