<?php
echo "<h3> Variables & Scope</h3>";

$stringVar = "Hotel Booking";
$intVar = 10;
$floatVar = 99.99;
$boolVar = true;
$arrayVar = array("Room", "Food", "Service");

echo "String: $stringVar <br>";
echo "Integer: $intVar <br>";
echo "Float: $floatVar <br>";
echo "Boolean: $boolVar <br>";
echo "Array: ";
print_r($arrayVar);
echo "<br><br>";

$globalVar = "I am Global";

function globalExample() {
    global $globalVar;
    echo "Global Scope: $globalVar <br>";
}
globalExample();

/* ---------- Local Scope ---------- */
function localExample() {
    $localVar = "I am Local";
    echo "Local Scope: $localVar <br>";
}
localExample();

/* ---------- Static Scope ---------- */
function staticExample() {
    static $count = 0;
    $count++;
    echo "Static Count: $count <br>";
}

staticExample();
staticExample();
staticExample();
?>