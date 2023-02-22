# 3. Bowling Game Kata

The Bowling Game Kata is a popular exercise in test-driven development that involves scoring a game of ten-pin bowling. The goal is to write a function that takes a list of rolls as input and calculates the final score for a game of bowling.

Here's an example to illustrate the problem. A game of bowling consists of ten frames, and each frame consists of up to two rolls. The score for each frame is determined by the number of pins knocked down in the two rolls, plus any bonuses for strikes or spares. If a player knocks down all ten pins in the first roll of a frame, this is called a strike, and the score for that frame is 10 plus the sum of the next two rolls. If a player knocks down all ten pins over the course of two rolls, this is called a spare, and the score for that frame is 10 plus the number of pins knocked down in the next roll. The score for the final frame can include up to three rolls, depending on whether the player gets a spare or strike.

The Kata involves writing a function to calculate the final score of a game of bowling. Here's an example signature for such a function:

```
<?php

namespace App;

class BowlingGame
{
    public function calculate($number):
    {
    }
}
```


To solve the Kata, you can use a test-driven development approach. Write a set of test cases that cover a variety of inputs and expected outputs, and use these tests to drive the development of your function. Start with simple inputs and build up to more complex ones. You can also think about edge cases and error handling, such as what happens if the input is not a valid list of rolls.

Some tips for approaching the Kata:

Understand the rules of ten-pin bowling, including the scoring system and the bonuses for strikes and spares.
Start with simple test cases, such as a game with all gutter balls or a game with all strikes, before moving on to more complex games.
Think about how you can iterate over the list of rolls and calculate the score for each frame.
Consider edge cases, such as the score for the final frame and handling invalid input.
Use the test-driven development approach to guide your implementation and catch any issues early on.