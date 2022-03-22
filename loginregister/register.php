<?php
error_reporting(false);
// $_POST["lname"];
// $_POST["email"];
// echo $_POST["agree"];

// echo "<pre>";
// $image = ($_FILES['image']['name']);

// $image = explode('.', $image);

// var_dump(end($image));


// echo "</pre>";

// if (($_FILES['image']['name']) != "") {
//     var_dump($_FILES['image']);
// } else {
//     echo "no";
// }


$connection = mysqli_connect("localhost", "root", "123", "query");

if (!$connection) {
    echo "not connected successfully";
}

$error;

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['password'];

if (isset($_POST["fname"]) && $_POST['fname'] == '') {
    $error = "first name cannot be empty";
} elseif (isset($_POST["lname"]) && $_POST['lname'] == '') {
    $error = "last name cannot be empty";
} elseif (isset($_POST["email"]) && $_POST['email'] == '') {
    $error = "email cannot be empty";
} elseif (isset($_POST["email"]) && !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $error = "email must be valid";
} elseif (isset($_POST["password"]) && $_POST['password'] == '') {
    $error = "password can not be empty";
} elseif ($_FILES['image']['name'] == "") {
    $error = "You need to upload image";
} elseif (!isset($_POST['agree'])) {
    $error = "You must have to agree with our terms and conditions";
} else {
    $image = $_FILES['image']['name'];
    $imageExtention = end(explode('.', $image));

    if ($imageExtention != 'png' && $imageExtention != 'jpg' && $imageExtention != 'jpeg') {
        $error = "Your image must be png, jpg or jpeg";
    } else {

        $query = "insert into user(fname, lname, email, password) values('$fname', '$lname', '$email', '$password')";


        if (mysqli_query($connection, $query)) {
            echo "You are successfully registered!";
        } else {
            echo "error";
        }
    }
}


//create a form, input type file, echo file size, file name, file extension
// compare size, if size is greater than 3mb then echo file not supported


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    if (isset($error)) {
        echo $error;
    }

    ?>

    <form action="" method="POST" enctype="multipart/form-data">
        <input type="text" name="fname"> First name
        <br>
        <input type="text" name="lname"> Last name
        <br>
        <input type="text" name="email"> email
        <br>
        <input type="text" name="password"> Password
        <br>
        <input type="file" name="image">
        <br>
        <input type="checkbox" name="agree"> Agree with our terms and conditions
        <br>

        <button type="submit">Submit</button>
    </form>
</body>

</html>