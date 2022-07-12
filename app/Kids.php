<?php
namespace App;
class Kids {
    private string $word;
    private string $letter;

    public function __construct(string $word, string $letter)
    {

        $this->word = $word;
        $this->letter = $letter;
    }
    public static function reverse(string $word, string $letter):string{
        if (strpos($word, $letter)){
            return strrev($word);
        } else  if (strpos($word,$letter) === false){
            return $word;
        }
    }
}
echo Kids::reverse('First man to walk on the moon', 'n');