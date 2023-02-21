<?php

namespace App;

use Exception;

class RomanNumerals
{

    const NUMERALS = [
        'M' => 1000,
        'CM' => 900,
        'D' => 500,
        'CD' => 400,
        'C' => 100,
        'XC' => 90,
        'L' => 50,
        'XL' => 40,
        'X' => 10,
        'IX' => 9,
        'V' => 5,
        'IV' => 4,
        'I' => 1
    ];

    /**
     * @throws Exception
     */
    public static function generate($number)
    {
        $result = '';

        if($number <= 0 || $number >= 4000){
            throw new Exception("Can not generate roman numerals for numbers less than 0");
        }

        foreach (static::NUMERALS as $numeral => $arabic){
            for(; $number >= $arabic; $number -= $arabic) {
                $result .= $numeral;
            }
        }

        return $result;
    }
}