<?php

namespace App;

/**
 * This is the class for Bowling Game Kata
 */
class Game
{

    /**
     * The numbers of frame in game.
     */
    const FRAMES_PER_GAME = 10;
    /**
     * All rolls for the game.
     *
     * @var array
     */
    protected array $rolls = [];

    /**
     * Roll the ball.
     *
     * @param int $pins
     * @return void
     */
    public function roll(int $pins)
    {
        $this->rolls[] = $pins;
    }

    /**
     * Calculate the final score.
     *
     * @return int
     */
    public function score(): int
    {
        $score = 0;
        $roll = 0;

        foreach (range(1, self::FRAMES_PER_GAME) as $frame) {
            if ($this->isStrike($roll)) {
                $score += $this->pinCount($roll) + $this->strikeBonus($roll);
                $roll = 1;
                continue;
            }

            $score += $this->defaultFrameScore($roll);

            if ($this->isSpare($roll)) {
                $score += $this->spareBonus($roll);

            }

            $roll += 2;
        }

        return $score;

    }

    /**
     * Check if the roll is strike.
     *
     * @param int $roll
     * @return bool
     */
    protected function isStrike(int $roll): bool
    {
        return $this->pinCount($roll) === 10;
    }

    /**
     * Check if the roll is spare.
     *
     * @param int $roll
     * @return bool
     */
    protected function isSpare(int $roll): bool
    {
        return $this->defaultFrameScore($roll) === 10;
    }

    /**
     * @param int $roll
     * @return int
     */
    protected function defaultFrameScore(int $roll): int
    {
        return $this->pinCount($roll) + $this->pinCount($roll + 1);
    }

    /**
     * Get the bonus for strike.
     *
     * @param int $roll
     * @return int
     */
    protected function strikeBonus(int $roll): int
    {
        return $this->pinCount($roll + 1) + $this->pinCount($roll + 2);
    }

    /**
     * Get the bonus for spare.
     *
     * @param int $roll
     * @return int
     */
    protected function spareBonus(int $roll): int
    {
        return $this->pinCount($roll + 2);
    }

    /**
     * Get the pin, for the specific roll.
     *
     * @param int $roll
     * @return int
     */
    protected function pinCount(int $roll): int
    {
        return $this->rolls[$roll];
    }
}