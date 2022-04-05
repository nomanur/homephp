<?php
$connection = mysqli_connect("localhost", "root", "123", "image");

if (!$connection) {
    echo "not connected successfully";
}


$id = $_GET['id'];


$query = "SELECT * from image where id='$id'";
$query = mysqli_query($connection, $query);
$image = mysqli_fetch_assoc($query);


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
    <img src="image/<?php echo $image['image']; ?>" alt="">

    <a href="editimage.php?id=<?php echo $image['id']; ?>&&name=<?php echo $image['image']; ?>">Edit</a>
</body>

</html>