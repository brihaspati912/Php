<?php

//Cookies= information about user stored in the web browser
//targeted data,browsing preference and other non-sensitive data

setcookie("Fav_food", "liti", time() + 86400, "/"); //86400=1 day
setcookie("Fav_drink", "gananka juice", time() + 86400, "/"); //86400=1 day

/*
foreach ($_COOKIE as $key => $value) {
    echo "{$key} = {$value} <br>";
}[]
    */

if (isset($_COOKIE["Fav_food"])) {
    echo "Your Fav food is :{$_COOKIE["Fav_food"]}";
} else {
    echo "Your Fav food is not set";
}
