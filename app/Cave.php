<?php
namespace App;
class Cave {
    private string $hello;
    private int $times;

    public function __construct(string $hello, int $times)
    {
        $this->hello = $hello;
        $this->times = $times;
    }
    public static function echoes(string $text, int $times):string{
        return str_repeat($text, $times);
    }
}