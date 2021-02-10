<?php


namespace Katas;

/**
 * Class Fibonacci
 * @package Katas
 */
final class Fibonacci
{
    public function run(int $number): int
    {
        if ($number <= 2) {
            return 1;
        }
        return intval($this->run($number - 1) + $this->run($number - 2));
    }
}
