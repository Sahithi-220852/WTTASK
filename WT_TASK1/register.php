<?php
include "db.php";

function cleanInput($data) {
    $data = trim($data);                 
    $data = htmlspecialchars($data);    
    $data = addslashes($data);           
    return $data;
}

$name     = cleanInput($_POST['name']);
$email    = cleanInput($_POST['email']);
$phone    = cleanInput($_POST['phone']);
$password = cleanInput($_POST['password']);

if (strlen($name) < 3) {
    die("Name must contain at least 3 characters");
}

if (strlen($password) < 6) {
    die("Password must contain at least 6 characters");
}

$name  = ucwords(strtolower($name));  
$email = strtolower($email);           

global $conn;

$sql = "INSERT INTO users (name, email, phone, password)
        VALUES ('$name', '$email', '$phone', '$password')";


if (mysqli_query($conn, $sql)) {
    echo "Registration successful";
    print "<br>Welcome $name";
} else {
    die("Registration failed");
}
?>