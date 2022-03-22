<?php
error_reporting(false);

$email = $_POST['email'];
$password = $_POST['password'];

$connection = mysqli_connect("localhost", "root", "123", "query");

if (!$connection) {
    echo "not connected successfully";
}

$query = "select * from user where email='$email' && password='$password' ";

$query = mysqli_query($connection, $query);
$result = mysqli_fetch_assoc($query);

if ($result['email'] != null) {
    echo "You are logged in!";
} else {
    echo "Login first";
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

    <form action="" method="POST">
        <input type="email" name="email">Email
        <br>
        <input type="password" name="password">Password
        <br>
        <button type="submit">Submit</button>
    </form>


</body>

</html>