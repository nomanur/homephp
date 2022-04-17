<?php

class Oopfunction
{
    public $test;
    public function test()
    {
        return 'ok';
    }

    public function result()
    {
        method_exists($this, 'test');

        return property_exists($this, 'test');
    }
}

$obj = new Oopfunction;

$r = $obj->result();

var_dump($r);
