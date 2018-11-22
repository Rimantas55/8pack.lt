<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "loginapp";


// $servername = "localhost";
// $username = "root";
// $password = "";
// $database = "sportas";


$cookie_name = "rimanto"; //tarpu negali buti
$cookie_value = "Kas turi buti cookie value";
setcookie($cookie_name, $cookie_value, time() + (60*60*24*2)); // galima dar *4 ir tai reikstu menesius, * 65 metus ir galima dar rasytu 86400 * 1 kas yra lygy 1 day

if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    //echo "Cookie '" . $cookie_name . "' is set!<br>";
    //echo "Value is: " . $_COOKIE[$cookie_name];
}






?>