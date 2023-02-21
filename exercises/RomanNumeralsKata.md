# 2. Roman Numerals Kata

The Roman Numerals Kata is a popular exercise in test-driven development that involves converting an integer into its equivalent representation in Roman numerals. The goal is to write a function that takes an integer as input and returns its Roman numeral representation.

Here's an example to illustrate the problem. Let's say we want to convert the number 49 into Roman numerals. We can start by writing down the Roman numeral equivalents for each digit in the number: 4 is represented by IV and 9 is represented by IX. We can combine these two numerals to get the final representation: XLIX. Therefore, the Roman numeral equivalent of 49 is XLIX.

The Kata involves writing a function to automate this process, taking an integer as input and returning its Roman numeral representation. Here's an example signature for such a function:


```
<?php

namespace App;

class RomanNumerals
{

    public static function generate($number)
    {
    }
}
```
To solve the Kata, you can use a test-driven development approach. Write a set of test cases that cover a variety of inputs and expected outputs, and use these tests to drive the development of your function. Start with simple inputs and build up to more complex ones. You can also think about edge cases and error handling, such as what happens if the input is not a positive integer or is larger than the maximum Roman numeral (3999).

Some tips for approaching the Kata:

Understand the rules of Roman numerals, including the symbols and their values, and the subtractive notation used for numbers like 4 and 9.
Start with simple test cases, such as the Roman numeral representation of 1, 5, and 10, before moving on to larger numbers.
Think about how you can iteratively reduce the input number by subtracting the largest possible Roman numeral value.
Consider edge cases, such as what happens if the input is 0, negative, or larger than the maximum Roman numeral (3999).
Use the test-driven development approach to guide your implementation and catch any issues early on.

This is the list of different roman numerals, can help you in your tests.

```
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
```

You can see to solve of this solution for this kata in **PHP** in this [link.](../php/tests/RomanNumeralsTests.php)
