<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "db_phpmysql";    //* table: user

$connection = new mysqli($host, $user, $pass, $db);
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

$email = $_POST['email'];
$password = $_POST['password'];
$query = "SELECT * FROM user WHERE email='$email' AND password='$password'";
$result = mysqli_query($connection, $query);
$check = mysqli_fetch_array($result);

if (isset($check)) {
    echo "Login Successful";
} else {
    echo "Login Failed";
}
