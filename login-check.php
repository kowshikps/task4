<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'connection.php';
$username = $_POST['username'] ?? null;
$upassword = $_POST['password'] ?? null;
$upassword = md5($upassword);
echo $upassword;
$query = "select * from udetails where username = '$username' and upassword = '$upassword'";
$results = mysqli_query($connection, $query);
if (mysqli_num_rows($results) > 0) {
    session_start();
    $_SESSION['username'] = $username; //Session has been set once the user login

    header('Location: user-management.php');
} else {
    header('Location: login.php');
}

