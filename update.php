<?php

include('connection.php');
$name = $_POST["name"];
$username = $_POST["user_name"];
$emailid = $_POST["email"];
$upassword= $_POST["password"];
$number = $_POST["mobile_no"];
$dob = $_POST["dob"];
$cpassword= $_POST["c_password"];
$gender = $_POST["gender"];
 
    $query = mysqli_query($connection, "INSERT into udetails(name,username,email,upassword,cpassword,number,gender,dob)  values ('$name','$username','$emailid','$password','$cpassword','$number','$gender','$dob')");
    if ($query) {
        echo "success";
        exit();
    } else {
        print_r(mysqli_error);
        exit();
    }
}
?>