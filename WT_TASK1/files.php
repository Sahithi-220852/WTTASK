<?php

$folder = "uploads/";
$files = scandir($folder);

echo "<h2>Uploaded Files</h2>";

foreach ($files as $file) {

    if ($file != "." && $file != "..") {
        $path = $folder . $file;

        echo "File: $file <br>";
        echo "Size: " . filesize($path) . " bytes <br>";
        echo "Last Modified: " . date("Y-m-d H:i:s", filemtime($path)) . "<br>";

        echo "<a href='download.php?file=$file'>Download</a> | ";
        echo "<a href='delete.php?file=$file'>Delete</a>";

        echo "<hr>";
    }
}
?>