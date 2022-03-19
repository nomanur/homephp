<?php

// mail($_POST['mail'], $_POST['subject'], 'test message');

// $first = $_POST['first'];
// $second = $_POST['second'];

// // echo $first + $second;


// function add($one, $two)
// {
//     echo $one + $two;
// }

// add($first, $second);


$name = $_POST['name'];
$age = $_POST['age'];


function info($names, $ages)
{
    echo $names . '-' . $ages;
}

info($name, $age);

//task
//create four input, input type number, add first two, minus third, multiply fourth
//create three input, one type text another two number, concat first one and add the second and third

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
        <!-- <input type="text" name="mail"> mail
        <input type="text" name="subject">subject
        <input type="password" name="password"> password -->

        <!-- <input type="number" name="first"> first
        <br>
        <input type="number" name="second"> second -->

        <!-- <input type="text" name="firstname">
        <input type="text" name="lastname"> -->

        <input type="text" name="name">
        <input type="number" name="age">

        <button type="submit">Submit</button>
    </form>

</body>

</html>