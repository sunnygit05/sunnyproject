<?php
$cookie_name1 = "Cookie_1";
$cookie_values1 = "val1";
$cookie_name2="Cookie_2";
$cookie_values2="val2";
$cookie_name3="Cookie_3";
$cookie_values3="val3";
$cookie_name4="Cookie_4";
$cookie_values4="val4";
$cookie_name5="Cookie_5";
$cookie_values5="val5";
$cookie_name6="Cookie_6";
$cookie_values6="val6";
$cookie_name7="Cookie_7";
$cookie_values7="val7";
$cookie_name8="Cookie_8";
$cookie_values8="val8";
$cookie_name9="Cookie_9";
$cookie_values9="val9";

setcookie($cookie_name1, $cookie_values1, time() + (86400 * 1), "/"); 
setcookie($cookie_name2, $cookie_values2, time() + (86400 * 1), "/"); 
setcookie($cookie_name3, $cookie_values3, time() + (86400 * 1), "/"); 
setcookie($cookie_name4, $cookie_values4, time() + (86400 * 1), "/"); 
setcookie($cookie_name5, $cookie_values5, time() + (86400 * 1), "/"); 
setcookie($cookie_name6, $cookie_values6, time() + (86400 * 1), "/"); 
setcookie($cookie_name7, $cookie_values7, time() + (86400 * 1), "/"); 
setcookie($cookie_name8, $cookie_values8, time() + (86400 * 1), "/"); 
setcookie($cookie_name9, $cookie_values9, time() + (86400 * 1), "/"); 
?>
<html><head>
    <style>
        body {background-color: black;
                color:white;
            text-align:center;}
        </style></head>
<body>
<?php
// Cookie 1
if(!isset($_COOKIE[$cookie_name1])) {
    echo "Cookie named '" . $cookie_name1 . "' is not set!";
} else {
    echo "Cookie:'" . $cookie_name1 . "' is set.<br>";
    echo "Value is: " . $_COOKIE[$cookie_name1];
}
//Cookie 2
if(!isset($_COOKIE[$cookie_name2])) {
    echo "Cookie named '" . $cookie_name2 . "' is not set!";
} else {
    echo "<br> Cookie:'" . $cookie_name2 . "' is set.<br>";
    echo "Value is: " . $_COOKIE[$cookie_name2];
}
//Cookie 3
if(!isset($_COOKIE[$cookie_name3])) {
    echo "Cookie named '" . $cookie_name3 . "' is not set!";
} else {
    echo "<br> Cookie:'" . $cookie_name3 . "' is set.<br>";
    echo "Value is: " . $_COOKIE[$cookie_name3];
}
//Cookie 4
if(!isset($_COOKIE[$cookie_name4])) {
    echo "Cookie named '" . $cookie_name4 . "' is not set!";
} else {
    echo "<br> Cookie:'" . $cookie_name4 . "' is set.<br>";
    echo "Value is: " . $_COOKIE[$cookie_name4];
}
//Cookie 5
if(!isset($_COOKIE[$cookie_name5])) {
    echo "Cookie named '" . $cookie_name5 . "' is not set!";
} else {
    echo "<br> Cookie:'" . $cookie_name5 . "' is set.<br>";
    echo "Value is: " . $_COOKIE[$cookie_name5];
}
//Cookie 6
if(!isset($_COOKIE[$cookie_name6])) {
    echo "Cookie named '" . $cookie_name6. "' is not set!";
} else {
    echo "<br> Cookie:'" . $cookie_name6 . "' is set.<br>";
    echo "Value is: " . $_COOKIE[$cookie_name6];
}
//Cookie 7
if(!isset($_COOKIE[$cookie_name7])) {
    echo "Cookie named '" . $cookie_name7 . "' is not set!";
} else {
    echo "<br> Cookie:'" . $cookie_name7 . "' is set.<br>";
    echo "Value is: " . $_COOKIE[$cookie_name7];
}
//Cookie 8
if(!isset($_COOKIE[$cookie_name8])) {
    echo "Cookie named '" . $cookie_name8 . "' is not set!";
} else {
    echo "<br> Cookie:'" . $cookie_name8 . "' is set.<br>";
    echo "Value is: " . $_COOKIE[$cookie_name8];
}
//Cookie 9
if(!isset($_COOKIE[$cookie_name9])) {
    echo "Cookie named '" . $cookie_name9 . "' is not set!";
} else {
    echo "<br> Cookie:'" . $cookie_name9 . "' is set.<br>";
    echo "Value is: " . $_COOKIE[$cookie_name9];
}
?>
</body>
</html>