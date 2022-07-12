<?php

namespace App;


class fortuneTeller {
    public string $color;
    public string $location;
    public string $name;
    public string $item;

    public function __construct(string $color, string $location, string $name, string $item)
    {
        $this->color = $color;
        $this->location = $location;
        $this->name = $name;
        $this->item = $item;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @return string
     */
    public function getItem(): string
    {
        return $this->item;
    }

    /**
     * @return string
     */
    public function getLocation(): string
    {
        return $this->location;
    }
    public static function fortuneTell(string $color, string $location, string $name, string $item): string
    {
        return "You will meet $name in $location, and find $item in a $color room together.";
    }
}
