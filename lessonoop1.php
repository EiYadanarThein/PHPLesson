<?php

class Car
{
    //property
    public $model="2009";
    public $color;
    public $speed;

    function say()
    {
        
        echo "beep";
    }
    function say1()
    {
        echo "bwan";
    }
}
    $mecedes=new Car(); //create object
    $mecedes->say(); //call method
    echo $mecedes->model; //print 2009
    $mecedes->model="2012";
    echo $mecedes->model;

    $bmw=new Car();
    $bmw->say1();

?>