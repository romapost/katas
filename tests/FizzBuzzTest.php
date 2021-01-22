<?php


use Katas\FizzBuzz;
use PHPUnit\Framework\TestCase;

final class FizzBuzzTest extends TestCase
{

    public function testInputOne()
    {
        $fizzbuzz = (new FizzBuzz(1))->run();
        $this->assertEquals('1', (string)$fizzbuzz);
    }

    public function testInputThree()
    {
        $fizzbuzz = (new FizzBuzz(3))->run();
        $this->assertEquals('Fizz', (string)$fizzbuzz);
    }

    public function testInputFive()
    {
        $fizzbuzz = (new FizzBuzz(5))->run();
        $this->assertEquals('Buzz', (string)$fizzbuzz);
    }

    public function testInputFifteen()
    {
        $fizzbuzz = (new FizzBuzz(15))->run();
        $this->assertEquals('FizzBuzz', (string)$fizzbuzz);
    }

    public function testInputOneHundredAndOne()
    {
        $fizzbuzz = (new FizzBuzz(101))->run();
        $this->assertEquals('101', (string)$fizzbuzz);
    }

    public function testInputNinetyNine()
    {
        $fizzbuzz = (new FizzBuzz(99))->run();
        $this->assertEquals('Fizz', (string)$fizzbuzz);
    }

    public function testInputOneHundred()
    {
        $fizzbuzz = (new FizzBuzz(100))->run();
        $this->assertEquals('Buzz', (string)$fizzbuzz);
    }

    public function testInputOneHundredAndFive()
    {
        $fizzbuzz = (new FizzBuzz(105))->run();
        $this->assertEquals('FizzBuzz', (string)$fizzbuzz);
    }

}
