<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "peminjaman_ruangan";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$user = $_POST['user'];
$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM $user WHERE nama ='$username' AND password='$password'";
$result = $conn->query($query);

if ($result->num_rows > 0) {

    header("Location: home_$user.php");
} else {
    
    echo "Login gagal";
}

$conn->close();
?>
