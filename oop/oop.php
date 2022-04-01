<?php

//class
//property
//method
//object

class Test //class
{
    public $test = "this is a property"; //property

    public function tests($id, $second) //method
    {
        echo "this is a method " . $id . ' ' . $second;
    }
}

$obj = new Test(); //object

echo $obj->test;
echo "<br>";
$obj->tests(1, 2);
