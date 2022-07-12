<?php
namespace App;
class GuestList
{
    private array $list;

    public function __construct(array $list)
    {
        $this->list = $list;
    }

    public static function doubleTrouble(array $list)
    {
        return array_unique($list);
    }
}