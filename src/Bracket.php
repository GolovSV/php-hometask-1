<?php

namespace Otus;
use InvalidArgumentException;

class Bracket
{
    public static function brackets(string $str):bool
    {
        $counter = 0;
        $strArray = str_split($str);
        
        for ($i = 0; $i < count($strArray); $i++) { 
    
            if ($strArray[0] !== "(") {
              throw new InvalidArgumentException('Строка открыта некорректно');
            }
    
            $strArray[$i] === "(" ? $counter++ : $counter--;
        }
    
        return $counter === 0 ? true : false;
    }
}