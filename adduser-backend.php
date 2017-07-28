<?php

include('connection.php');
error_reporting(E_ALL);
ini_set('display_errors', 1);
$name = $_POST["name"];
$username = $_POST["username"];
$emailid = $_POST["email"];
$upassword = $_POST["upassword"];
$upassword = md5($upassword);
$number = $_POST["number"];
$dob = $_POST["dob"];
$gender = $_POST["gender"];
$date = date('Y-m-d H:i:s');


if (empty($name) || empty($username) || empty($number) ||
        empty($emailid) || empty($upassword) || empty($gender) || empty($dob)) {
    echo "You did not fill out the required fields.";
    die();
}
$query = mysqli_query($connection, "INSERT into udetails(name,username,email,upassword,number,gender,dob,created_at,updated_at)  values ('$name','$username','$emailid','$upassword','$number','$gender','$dob','$date','$date')");


if ($query) {
    echo "success";
    header("Location: user-management.php");
    exit();
} else {
    print_r(mysqli_error);
    exit();
}

if ($_GET['value'] == 1) {

    if (isset($_POST['user_email'])) {
        $emailId = $_POST['user_email'];
        $id = $_POST['id'];
        $checkdata = mysqli_query($connection, " SELECT * FROM udetails WHERE email='$emailId' and id <> $id");
        if (mysqli_num_rows($checkdata) > 0) {
            echo "\n Email  Exist";
        } else {
            echo "updated";
        }
        exit();
    }
} else {
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
}
?>