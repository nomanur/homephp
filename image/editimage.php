<?php

$id = $_GET['id'];
$name = $_GET['name'];

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

    <form action="updateimage.php?id=<?php echo $id; ?>" method="POST" enctype="multipart/form-data">
        <input type="file" name="image">
        <input type="hidden" name="name" value="<?php echo $name ?>">
        <br>
        <button type="submit">Submit</button>
    </form>

</body>

</html>