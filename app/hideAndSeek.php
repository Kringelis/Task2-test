<?php

namespace App;
class hideAndSeek
{

    public static function hideAndSeek(string $crowd)
    {
        $name = [];
        $letters = str_split($crowd);
        foreach ($letters as $letter) {
            if (ctype_upper($letter)) continue;
            $name[] = $letter;
        }
        return (implode('', $name));

    }
}
