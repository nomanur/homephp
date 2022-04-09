<?php
//class
//property
//method
//object

class User //class
{
    public $test = "test property"; //property

    public function __construct($id, $s)
    {
        //echo $id + $s;
    }

    public function testfunction() //method
    {
        echo 'test function';
    }

    public function second($id, $s)
    {
        return $id + $s;
    }

    public function getProperty()
    {
        echo $this->test;
    }

    public function getMethod()
    {
        return $this->second(3, 4);
    }

    public function setProperty()
    {
        $this->test = "updated property";
    }
}

$obj = new User(1, 2);

// echo $obj->test;
// echo "<br>";
// $obj->testfunction();
// echo "<br>";
// $obj->second(44, 40);
//$obj->getProperty();
// echo $obj->getMethod();
$obj->setProperty();
echo $obj->test;



// function test()
// {
//     return "test";
// }

// $test = test();

// echo $test;
