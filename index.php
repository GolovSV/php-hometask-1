<?php


function brackets(string $str):bool
{
    $counter = 0;

    for ($i = 0; $i < $strArray = str_split($str); $i++) { 

        if ($strArray[0] !== "(") {
          throw new InvalidArgumentException('Строка открыта некорректно');
        }

        $strArray[$i] === "(" ? $counter++ : $counter--;
    }


    $counter === 0 ? true : false;
}