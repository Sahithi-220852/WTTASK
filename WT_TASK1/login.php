<?php
include "db.php";

$email = trim($_POST['email']);
$password = trim($_POST['password']);

$email = strtolower($email);  

if (strlen($email) == 0 || strlen($password) == 0) {
    die("Email and Password cannot be empty");
}

global $conn;

$sql = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Database query failed");
}

if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);

    if (strcmp($row['password'], $password) == 0) {
        echo "Login successful";
        print "<br>Welcome " . $row['name'];
    } else {
        echo "Invalid password";
    }

} else {
    echo "Invalid login details";
}
?>