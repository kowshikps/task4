<?php
include('connection.php'); //Database connection is established
error_reporting(E_ALL);
ini_set('display_errors', 1);
$id = $_POST['id'];
$name = $_POST['name'];
$username = $_POST['username'];
$number = $_POST['number'];
$email = $_POST['email'];
$upassword = $_POST['upassword'];
$upassword = md5($upassword);
$gender = $_POST['gender'];l
$dob = $_POST['dob'];

$date = date('Y-m-d H:i:s');
if(empty($id) || empty($name) || empty($username) || empty($number) ||
    empty($email) || empty($upassword) || empty($gender) || empty($dob)) //Backend validation to check if any field is empty
{
    echo "You did not fill out the required fields.";
	die();
}

$query = mysqli_query($connection, "UPDATE udetails SET name = '$name',username = '$username', email = '$email', upassword = '$upassword',number= '$number',gender = '$gender',dob = '$dob',created_at = '$date', updated_at = '$date' WHERE id='$id'");
if (mysqli_affected_rows() >= 1) {
    echo "<p>($id) Record Updated<p>";
    header("Location: user-management.php");
} else {
    header("Location: user-management.php");
    echo "<p>($id) Record Updated<p>";
}
?>