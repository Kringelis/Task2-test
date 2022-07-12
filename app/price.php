<?php
namespace App;
class price
{
    private int $price;
    private int $discount;

    public function __construct(int $price, int $discount)
    {
        $this->price = $price;
        $this->discount = $discount;
    }

    public static function discount( int $price, int $discount) {
        return $price -  ($price * ($discount / 100));
    }
}