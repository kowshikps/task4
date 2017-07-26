<?php

include('connection.php');
error_reporting(E_ALL);
ini_set('display_errors', 1);
$id = $_POST['id'];
 $name = $_POST['name'];
 $username = $_POST['username'];
 $number = $_POST['number'];
 $email = $_POST['email'];
 $upassword = $_POST['upassword'];
 $cpassword = $_POST['cpassword'];
 $gender = $_POST['gender'];
 $dob = $_POST['dob'];


$query = mysqli_query($connection, "UPDATE udetails SET name = '$name',username = '$username', email = '$email', upassword = '$upassword',number= '$number',cpassword = '$cpassword',gender = '$gender',dob = '$dob' WHERE id='$id'");
if (mysqli_affected_rows() >= 1) {
    echo "<p>($id) Record Updated<p>";
    header("Location: user-management.php");
} else {
    header("Location: user-management.php");
    echo "<p>($id) Record Updated<p>";
}
?>