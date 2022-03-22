<?php

var_dump($_POST['color']);

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
        <input type="checkbox" value="sat" name="day[]" checked>sat
        <input type="checkbox" value="sun" name="day[]">sun
        <input type="checkbox" value="mon" name="day[]">mon
        <br>

        <input type="radio" name="gender" value="male"> Male
        <input type="radio" name="gender" value="female"> Female
        <br>

        <select name="color[]" id="" multiple>
            <option value="red">Red</option>
            <option value="green">Green</option>
            <option value="blue">Blue</option>
        </select>



        <button type="submit">Submit</button>
    </form>
</body>

</html>