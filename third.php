<?php


// $para = "this is a example";

// echo rtrim($para, 'example');

// echo substr($para, 0, -7);

// $count = strlen($para);

// if ($count != 15) {
//     echo 'its not equal to 15';
// } else {
//     echo 'its equal to 15';
// }


// $array = array(
//     "one" => [
//         'two' => [
//             'three' => [
//                 'four' => [
//                     'five' => 5
//                 ]
//             ]
//         ]
//     ]
// );


// var_dump($array['one']['two']['three']['four']['five']);

// echo $_POST['password'];
// echo '<br>';

var_dump($_POST['description']);
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
        Email
        <input type="text" name="email">
        password
        <input type="password" name="password">

        <input type="radio" name="gender" value="male"> male
        <input type="radio" name="gender" value="female"> Female
        <br>
        checkbox
        <input type="checkbox" name="day[]" value="sat">Sat
        <input type="checkbox" name="day[]" value="sun">Sun
        <input type="checkbox" name="day[]" value="mon">Mon
        <br>
        select color
        <select name="color[]" id="" multiple>
            <option value="red">Red</option>
            <option value="green">Green</option>
            <option value="blue">blue</option>
        </select>
        <br>
        <textarea name="description"></textarea>

        <button type="submit">Submit</button>
    </form>


</body>

</html>