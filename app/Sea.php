<?php
namespace App;
class Sea
{

    public static function findingNemo(string $input):string
    {

        $pos = explode(',', $input);
        $position = array_search('Nemo', $pos);
        if (strpos($input, 'Nemo')) {
            return "I found Nemo at $position!";
        } else {
            return "I can't find Nemo :(";
        }
    }

}
