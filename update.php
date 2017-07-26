<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include('connection.php');
$name = $_POST["name"];
$username = $_POST["user_name"];
$emailid = $_POST["email"];
$upassword= $_POST["password"];
$number = $_POST["mobile_no"];
$dob = $_POST["dob"];
$cpassword= $_POST["c_password"];
$gender = $_POST["gender"];
 
    $query = mysqli_query($connection, "INSERT into udetails(name,username,email,upassword,cpassword,number,gender,dob)  values ('$name','$username','$emailid','$upassword','$cpassword','$number','$gender','$dob')");
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
	}
else {
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