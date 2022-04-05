<?php

$id = $_GET['id'];

$connection = mysqli_connect("localhost", "root", "123", "query");

if (!$connection) {
    echo "not connected successfully";
}

$id = $_GET['id'];

$query = "DELETE from user where id ='$id'";
$query = mysqli_query($connection, $query);

if ($query) {
    header("Location: showuser.php");
}
