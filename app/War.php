<?php
namespace App;
class War
{
    private int $odd;
    private int $even;

    public function __construct(int $odd, int $even)
    {
        $this->odd = $odd;
        $this->even = $even;
    }

    public static function war(array $numbers)
    {

        $odd = $numbers & 1;
        $even = !$numbers & 1;

        $oddArray = array_filter($numbers, function ($numbers){if( $numbers % 2 === 0) return $numbers ;});
        $evenArray = array_filter($numbers, function ($numbers){if(!$numbers % 2 === 0) return $numbers;});
        $evenWinner = array_sum($evenArray) - array_sum($oddArray);
        $oddWinner = array_sum($oddArray) - array_sum($evenArray);
        if (array_sum($evenArray) > array_sum($oddArray)) {
            return "Even numbers win by $evenWinner!";
        } else {
            return "Odd numbers win by $oddWinner!";
        }
    }
}