<?php

$testemail = "test@gmail.com";
$testpassword = 12345;

$email = $_POST['email'];
$password = $_POST['password'];

if ($email == $testemail && $password == $testpassword) {
    echo "you r logged in";
} else {
    echo "login failed";
}
?>

<!-- create form with email password and confirm password -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="" method="POST" enctype="multipart/form-data">
        <input type="text" name="email">Email
        <br>
        <input type="password" name="password">Password
        <br>

        <button type="submit">Submit</button>

    </form>

</body>

</html>