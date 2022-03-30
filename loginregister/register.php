<?php
// error_reporting(false);

// $img = ($_FILES['image']);

// var_dump($img);

// var_dump(rand(100, 1000));


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
    //noman_123332.jpg
    $imagename = $fname . '_' . time() . '_' . rand(100, 1000) . '_' . rand(100, 1000) . '_' . $image;
    $imageArray = explode('.', $image);
    $imageExt = end($imageArray);
    $imgTempName = $_FILES['image']['tmp_name'];

    if ($imageExt != 'png' && $imageExt != 'jpg' && $imageExt != 'jpeg') {
        $error = "Your image must be png, jpg or jpeg";
    } else {
        if (move_uploaded_file($imgTempName, 'images/' . $imagename)) {
            $query = "insert into user(fname, lname, email, image , password) values('$fname', '$lname', '$email', '$imagename', '$password')";

            if (mysqli_query($connection, $query)) {
                echo "You are successfully registered!";
            } else {
                echo "error";
            }
        } else {
            echo 'Image not uploaded';
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
        <input type="email" name="email"> email
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