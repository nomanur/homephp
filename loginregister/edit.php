<?php

$id = $_GET['id'];

$connection = mysqli_connect("localhost", "root", "123", "query");

if (!$connection) {
    echo "not connected successfully";
}

$query = "SELECT * from user where id=$id ";
$query = mysqli_query($connection, $query);
$result = mysqli_fetch_assoc($query);


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

    <form action="update.php?id=<?php echo $result['id']; ?>" method="POST" enctype="multipart/form-data">
        <input type="text" name="fname" value="<?php echo $result['fname']; ?>"> fname
        <br>
        <input type="text" name="lname" value="<?php echo $result['lname']; ?>"> lname
        <br>
        <input type="email" name="email" value="<?php echo $result['email']; ?>"> email

        <br>
        <button type="submit">Submit</button>
    </form>

</body>

</html>