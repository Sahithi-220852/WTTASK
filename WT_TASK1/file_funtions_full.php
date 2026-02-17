<?php

echo "<h3>File Read/Write Functions</h3>";

// fopen, fwrite, fclose
$file = fopen("demo.txt", "w");
fwrite($file, "Hello File Functions");
fclose($file);
echo "File written successfully<br>";

$file = fopen("demo.txt", "r");
echo "File Content: " . fread($file, filesize("demo.txt")) . "<br>";
fclose($file);

echo "Using file_get_contents: " . file_get_contents("demo.txt") . "<br>";
file_put_contents("demo2.txt", "Second file created");
echo "file_put_contents executed<br>";
$lines = file("demo.txt");
print_r($lines);

echo "<hr>";

//file info
echo "<h3>File Information</h3>";

echo "File Exists: ".(file_exists("demo.txt") ? "Yes" : "No") . "<br>";
echo "File Size: ".filesize("demo.txt") . "<br>";
echo "File Type: ".filetype("demo.txt") . "<br>";
echo "Access Time: ". date("Y-m-d H:i:s", fileatime("demo.txt")) . "<br>";
echo "Modified Time: ". date("Y-m-d H:i:s", filemtime("demo.txt")) . "<br>";
echo "Created Time:  ". date("Y-m-d H:i:s", filectime("demo.txt")) . "<br>";
echo "Permissions: ". fileperms("demo.txt") . "<br>";
echo "Owner: ".fileowner("demo.txt") . "<br>";
echo "Group: ".filegroup("demo.txt") . "<br>";
echo "Inode: ".fileinode("demo.txt") . "<br>";

echo "<hr>";

//directory handling
//file and folder management
echo "<h3>File & Folder Management</h3>";

copy("demo.txt", "copy_demo.txt");
echo "File copied<br>";

rename("copy_demo.txt", "renamed_demo.txt");
echo "File renamed<br>";

mkdir("testfolder");
echo "Folder created<br>";

echo "Is demo.txt file? " . (is_file("demo.txt") ? "Yes" : "No") . "<br>";
echo "Is testfolder dir? " . (is_dir("testfolder") ? "Yes" : "No") . "<br>";

unlink("renamed_demo.txt");
echo "File deleted<br>";

rmdir("testfolder");
echo "Folder deleted<br>";

echo "<hr>";
 echo "<h3>Directory Handling</h3>";

// scandir
$files = scandir(".");
print_r($files);

// opendir, readdir, closedir
$dir = opendir(".");
while (($file = readdir($dir)) !== false) {
    echo "File: " . $file . "<br>";
}
closedir($dir);

echo "Current Directory: " . getcwd() . "<br>";

chdir("uploads");
echo "Changed Directory: " . getcwd() . "<br>";

echo "<hr>";

//file locking
echo "<h3>File Locking</h3>";

$file = fopen("lock.txt", "w");
if (flock($file, LOCK_EX)) {
    fwrite($file, "File locked and written");
    flock($file, LOCK_UN);
}
fclose($file);

echo "File locking demonstrated<br>";
?>