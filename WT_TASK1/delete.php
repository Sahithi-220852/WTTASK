<?php

$file = "uploads/" . $_GET['file'];

if (file_exists($file)) {
    unlink($file);
    echo "File deleted successfully<br>";
    echo "<a href='files.php'>Back</a>";
} else {
    echo "File not found";
}

?>