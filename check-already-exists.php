<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'connection.php';

$email = $_POST['email'];
$id = $_POST['id'] ?? null;
$query = "select * from udetails where email = '$email'";
if ($id) {
    $query .= "and id!= $id";
}
$results = mysqli_query($connection, $query);
if (mysqli_num_rows($results) > 0) {
    echo "failed";
} else {
    echo "succeeded";
}
