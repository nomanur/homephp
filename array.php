<?php

// $array = [1, 2, 3];

// array_push($array, 5, 6, 7);
// array_unshift($array, 0, 9);
// array_pop($array);
// array_shift($array);

// var_dump($array);

// $array = [1, 2, 3, 4, 5, 6];


// $arr = array_slice($array, 0, -2);

// $arr1 = [1, 2];
// $arr2 = [3, 4, 5];

// $merge = array_merge($arr2, $arr1);

// $sum = array_sum($merge);


// $arr3 = [1, 2, 3];
// $arr4 = [1, 2];

// $diff = array_diff($arr3, $arr4);

// $array = [1, 2, 3];

// $splice = array_splice($array, -3, 1);

// shuffle($array);
// end($array);
// in_array(55, $array);


// $array = [1, 2, 3];

// echo end($array);

// $img = "picture.jpg";

// // $river = "jamuna. rupsha. padma. test";

// // $sta = explode('.', $river);

// $picaray = explode('.', $img);

// var_dump($picaray);


$array = [1, 2, 3, 4];

// var_dump($array);

$map = array_map(function ($arr) {
    return  2 * $arr;
}, $array);

var_dump($map);



$array = ['key' =>
[
    'test' => [
        'second' => 'second step'
    ]

]];
