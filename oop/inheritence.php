<?php

// class One
// {
//     private $firstProperty = 'this is first property';

//     public function first()
//     {
//         //return "this is first function";
//         echo $this->firstProperty;
//     }
// }

// // $one = new One;

// // echo $one->first();

// class two extends One
// {
//     public function fromtwo()
//     {
//         echo $this->firstProperty;
//     }
// }

// $two = new two;

// $two->fromtwo();



class one
{
    public $test = 'test';


    public function first()
    {
        echo "first";
    }
}


class two extends one
{
}


$two = new two;

echo $two->first();
