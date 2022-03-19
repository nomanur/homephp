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

$error;

if (isset($_POST["fname"]) && $_POST['fname'] == '') {
    $error = "first name cannot be empty";
} elseif (isset($_POST["lname"]) && $_POST['lname'] == '') {
    $error = "last name cannot be empty";
} elseif (isset($_POST["email"]) && $_POST['email'] == '') {
    $error = "email cannot be empty";
} elseif (isset($_POST["email"]) && !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $error = "email must be valid";
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
        echo "You are successfully registered!";
    }
}


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
        <input type="file" name="image">
        <br>
        <input type="checkbox" name="agree"> Agree with our terms and conditions
        <br>

        <button type="submit">Submit</button>
    </form>
</body>

</html>