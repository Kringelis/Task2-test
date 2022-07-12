<?php
namespace App;
class House {
    private string $item;
    private int $value;

    public function __construct(string $item, int $value)
    {
        $this->item = $item;
        $this->value = $value;
    }
    public static function burgular(string $item, int $value):string{
        if (count($item) === 0){
            return 'Lucky you!';
        }
        return array_sum($value);
    }
}
