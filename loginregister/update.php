<?php

$connection = mysqli_connect("localhost", "root", "123", "query");

if (!$connection) {
    echo "not connected successfully";
}

$id = $_GET['id'];

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];

$query = "UPDATE user set fname='$fname', lname='$lname', email='$email' where id ='$id'";
$query = mysqli_query($connection, $query);

if ($query) {
    header("Location: showuser.php");
}
