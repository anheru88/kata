
## 1. Prime Factors Kata

he Prime Factors Kata is a popular exercise in test-driven development that involves finding the prime factors of a given integer. The goal is to write a function that takes an integer as input and returns a list of its prime factors, where each factor appears as many times as it divides the input integer.

Here's an example to illustrate the problem. Let's say we want to find the prime factors of the number 60. We can start by finding the smallest prime number that divides 60 evenly, which is 2. We can divide 60 by 2 and get 30. Then we repeat the process by finding the smallest prime number that divides 30 evenly, which is 2 again. We can divide 30 by 2 and get 15. Then we repeat the process again, finding the smallest prime number that divides 15 evenly, which is 3. We can divide 15 by 3 and get 5. Finally, we have reached a prime number, and we can stop. The prime factors of 60 are therefore 2, 2, 3, and 5.

The Kata involves writing a function to automate this process, taking an integer as input and returning a list of its prime factors. Here's an example signature for such a function:

```
<?php

namespace App;

class PrimeFactors
{
    public function generate($number): array
    {
    }
}
```

To solve the Kata, you can use a test-driven development approach. Write a set of test cases that cover a variety of inputs and expected outputs, and use these tests to drive the development of your function. Start with simple inputs and build up to more complex ones. You can also think about edge cases and error handling, such as what happens if the input is not a positive integer.

Some tips for approaching the Kata:

Remember that a prime number is only divisible by 1 and itself.
Start with simple test cases, such as the prime factors of 2, 3, and 4, before moving on to larger numbers.
Think about how you can iteratively reduce the input number by dividing it by its smallest prime factor.
Consider edge cases, such as what happens if the input is 1 or a negative integer.
Use the test-driven development approach to guide your implementation and catch any issues early on.

You can see the solve of this solution for this kata in **PHP** in this [link.](../php/tests/PrimeFactorsTest.php)
