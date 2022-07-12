<?php
namespace App;
class Clock
{
    private string $time;

    public function __construct(string $time)
    {
        $this->time = $time;
    }

    public static function timeWillTell(string $seconds)
    {
        return gmdate('H:i:s', $seconds);
    }
}