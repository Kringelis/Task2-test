<?php

namespace App;
class pupperAge
{

    public static function pupperPrinter(int $dogAge)
    {
        $dog = $dogAge * 7;
        return "Your doggie is $dog years old in dog years!";
    }
}
