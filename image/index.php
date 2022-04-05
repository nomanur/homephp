<?php

$connection = mysqli_connect("localhost", "root", "123", "image");

if (!$connection) {
    echo "not connected successfully";
}

$image = $_FILES['image']['name'];
//noman_123332.jpg
$imagename = time() . '_' . rand(100, 1000) . '_' . rand(100, 1000) . '_' . $image;
$imageArray = explode('.', $image);
$imageExt = end($imageArray);
$imgTempName = $_FILES['image']['tmp_name'];

if ($imageExt != 'png' && $imageExt != 'jpg' && $imageExt != 'jpeg') {
    $error = "Your image must be png, jpg or jpeg";
} else {
    if (move_uploaded_file($imgTempName, 'image/' . $imagename)) {
        $query = "insert into image(image) values('$imagename')";
        if (mysqli_query($connection, $query)) {
            echo "Successfully uploaded!";
        } else {
            echo "error";
        }
    } else {
        echo 'Image not uploaded';
    }
}

$query = "SELECT * from image";
$query = mysqli_query($connection, $query);



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
        <input type="file" name="image">
        <br>
        <button type="submit">Submit</button>
    </form>

    <hr>

    <?php
    while ($images = mysqli_fetch_assoc($query)) { ?>
        <a href="singleimage.php?id=<?php echo $images['id']; ?>">
            <img style="height: 100px; width=100px;" src="image/<?php echo $images['image']; ?>" alt="">
        </a>
    <?php }

    ?>


</body>

</html>