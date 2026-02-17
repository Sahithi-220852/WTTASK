<?php
$target_dir="uploads/";
$file_name=$_FILES["file"]["name"];
$target_file=$target_dir . $file_name;
if(move_uploded_file($_FILES["file"]["tmp_name"],$target_file)){
    echo "File uploded successfully<br>";
    echo "<a href='files.php'>View Files</a>";
}
else{
    echo "Upload failed";
}
?> 