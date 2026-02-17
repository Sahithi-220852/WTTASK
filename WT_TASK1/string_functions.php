<?php
echo "<h3>PART B: String Functions</h3>";

$str = "  welcome to hotel booking system  ";

echo "Length: " . strlen($str) . "<br>";
echo "Word Count: " . str_word_count($str) . "<br>";
echo "Reverse: " . strrev($str) . "<br>";

echo "Uppercase: " . strtoupper($str) . "<br>";
echo "Lowercase: " . strtolower($str) . "<br>";
echo "Ucfirst: " . ucfirst(trim($str)) . "<br>";
echo "Ucwords: " . ucwords(trim($str)) . "<br>";

echo "Position of 'hotel': " . strpos($str, "hotel") . "<br>";
echo "Replace hotel: " . str_replace("hotel", "resort", $str) . "<br>";

echo "Substring: " . substr($str, 0, 10) . "<br>";

echo "Trim: '" . trim($str) . "'<br>";
echo "Left Trim: '" . ltrim($str) . "'<br>";
echo "Right Trim: '" . rtrim($str) . "'<br>";

echo "strcmp: " . strcmp("Admin", "admin") . "<br>";
echo "strcasecmp: " . strcasecmp("Admin", "admin") . "<br>";

echo "htmlspecialchars: " . htmlspecialchars("<b>Hotel</b>") . "<br>";
echo "addslashes: " . addslashes("O'Reilly") . "<br>";
?>