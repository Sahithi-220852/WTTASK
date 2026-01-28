<?php
include "db.php";

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];

$sql = "INSERT INTO users (username, email, phoneno, password)
        VALUES ('$name', '$email', '$phone', '$password')";

if (mysqli_query($conn, $sql)) {
    echo "Registration successful";
} else {
    echo "Error";
}
?>