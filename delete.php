<?php

include 'connection.php';
$id = $_GET['id'];
$query = "update udetails set soft_delete = 1 where id = $id";
mysqli_query($connection, $query);
header('Location: user-management.php');


