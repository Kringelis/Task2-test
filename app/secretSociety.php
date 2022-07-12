<?php
namespace App;
class secretSociety
{
    private array $names;

    public function __construct(array $names)
    {
        $this->names = $names;
    }

    public static function secretSociety(array $names): string
    {
        asort($names);
        $words = implode(' ', $names);
        $acronym = "";

        foreach ($names as $w) {
            $acronym .= mb_substr($w, 0, 1);
        }
        return $acronym;

    }
}
