<?php



// $array = [0 => 1, 1 => 2, 2 => [3 => [6 => 9]]];

// var_dump($array[2][3][6]);

// $array = [
//     'one' => [
//         'first' => [
//             'second' => [
//                 'third' => 'this is final step'
//             ]
//         ]
//     ], 'two' => 2,
//     'three' => [
//         'another' => 3
//     ]
// ];


// echo "<pre>";
// var_dump($array['one']['first']['second']['third']);
// echo "</pre>";



// $array = ['image' => [
//     'name' => 'image.jpg',
//     'size' => 1024
// ]];

// var_dump($_FILES['image']['size']);

// $img = ($_FILES['image']['size']);

// $img = $_FILES['image']['size'];
// if ($img > 3072) {
//     echo "image size is more than 3KB";
// }

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

    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="image">
        <br>
        <button type="submit">Submit</button>
    </form>

</body>

</html>