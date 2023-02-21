<?php


use App\RomanNumerals;
use PHPUnit\Framework\TestCase;

class RomanNumeralsTests extends TestCase
{
    /**
     * @test
     * @dataProvider checks
     */
    function it_generates_the_roman_numeral_for_number($number, $expected)
    {
        $this->assertEquals($expected, RomanNumerals::generate($number));
    }

    /**
     * @test
     */
    function it_cannot_generate_a_roman_numeral_for_less_than_1(){
        $this->expectException(Exception::class);
        RomanNumerals::generate(0);

    }

    /**
     * @test
     */
    function it_cannot_generate_a_roman_numeral_for_more_than_3999(){
        $this->expectException(Exception::class);
        RomanNumerals::generate(4000);

    }


    public static function checks()
    {
        return [
            [1, 'I'],
            [2, 'II'],
            [3, 'III'],
            [4, 'IV'],
            [5, 'V'],
            [6, 'VI'],
            [7, 'VII'],
            [8, 'VIII'],
            [9, 'IX'],
            [10, 'X'],
            [40, 'XL'],
            [50, 'L'],
            [90, 'XC'],
            [100, 'C'],
            [400, 'CD'],
            [500, 'D'],
            [900, 'CM'],
            [1000, 'M'],
            [1, 'I'],
            [4, 'IV'],
            [9, 'IX'],
            [20, 'XX'],
            [42, 'XLII'],
            [99, 'XCIX'],
            [490, 'CDXC'],
            [1994, 'MCMXCIV'],
            [3999, 'MMMCMXCIX']
        ];
    }
}
