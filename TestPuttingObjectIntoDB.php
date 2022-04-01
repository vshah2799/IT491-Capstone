<?php

class TestPuttingObjectIntoDB
{
    public string $name;
    public int $age;
    public string $hello;

    public function __construct($namef, $agef)
    {
        $name = $namef;
        $age = $agef;
    }

    public function setHello(string $hi){
        $hello = $hi;
    }


}