<?php

// define('nama', "NAILUL");
// echo nama;


// const UMUR = 10;
// echo UMUR;

// class test
// {
//     const name = "nailul";
// }

// echo test::name;

// echo __FILE__;

// function test()
// {
//     echo __FUNCTION__;
//     echo "HELLO WORLD";
//     return __FUNCTION__;
// }

class coba
{
    public $class = __CLASS__;
}

$obj = new coba;
echo $obj->class;
