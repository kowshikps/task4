<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'connection.php';
$username = $_POST['username']??null;
$password = $_POST['password']??null;

$query = "select * from admin where username = '$username' and password = '$password'";
$results = mysqli_query($connection, $query);
if (mysqli_num_rows($results) >0) {
    header('Location: user-management.php');
} else {
    header('Location: index.php');
}
