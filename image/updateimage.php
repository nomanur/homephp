<?php

$connection = mysqli_connect("localhost", "root", "123", "image");

if (!$connection) {
    echo "not connected successfully";
}


$id = $_GET['id'];
$name = $_POST['name'];



$image = $_FILES['image']['name'];
//noman_123332.jpg
$imagename = time() . '_' . rand(100, 1000) . '_' . rand(100, 1000) . '_' . $image;
$imageArray = explode('.', $image);
$imageExt = end($imageArray);
$imgTempName = $_FILES['image']['tmp_name'];

if ($imageExt != 'png' && $imageExt != 'jpg' && $imageExt != 'jpeg') {
    echo "Your image must be png, jpg or jpeg";
} else {
    if (move_uploaded_file($imgTempName, 'image/' . $imagename)) {

        unlink('image/' . $name);

        $query = "UPDATE image set image='$imagename' where id='$id'";
        if (mysqli_query($connection, $query)) {
            header("Location: index.php");
        } else {
            echo "error";
        }
    } else {
        echo 'Image not uploaded';
    }
}
