<?php
namespace App;
class Family
{
    private string $name;
    private int $age;
    private int $money;

    public function __construct(string $name, int $age, int $money)
    {
        $this->name = $name;
        $this->age = $age;
        $this->money = $money;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function getMoney(): int
    {
        return $this->money;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public static function calc(array $Family): int
    {
        $budget = 0;
        foreach ($Family as $member) {
            $budget += $member->getMoney();
        }
        return $budget;
    }
}
