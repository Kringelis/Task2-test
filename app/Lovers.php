<?php
namespace App;
class Lovers
{

    private array $men;
    private array $women;

    public function __construct(array $men, array $women)
    {

        $this->men = $men;
        $this->women = $women;
    }

    static public function cupid(array $men, array $women)
    {
        if (count($men) === count($women)) {
            return array_merge($men, $women);
        } else {
            return "Cupid is on vacation!";
        }

    }

}