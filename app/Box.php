<?php
namespace App;
class Box
{

    public static function boxVolume(array $box):int
    {
        $volumes = [];
        foreach ($box as $b) {
            $volumes[] = array_product($b);
        }
        return array_sum($volumes);
    }

}