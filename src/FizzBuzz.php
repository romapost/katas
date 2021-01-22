<?php


namespace Katas;

/**
 * Class FizzBuzz
 * @package Katas
 */
final class FizzBuzz
{
    private int $number = 0;

    /**
     * FizzBuzz constructor.
     * @param $number
     */
    public function __construct(int $number)
    {
        $this->setNumber($number);
    }

    /**
     * @return int
     */
    public function getNumber(): int
    {
        return $this->number;
    }

    /**
     * @param int $number
     */
    public function setNumber(int $number): void
    {
        $this->number = $number;
    }

    public function run() : string
    {
        $number = $this->getNumber();

        if ($number % 15 == 0) {
            return "FizzBuzz";
        } else if ($number % 5 == 0) {
            return "Buzz";
        } else if ($number % 3 == 0) {
            return "Fizz";
        } else {
            return $number;
        }
    }
}
