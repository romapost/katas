<?php


use Katas\Fibonacci;
use PHPUnit\Framework\TestCase;

class FibonacciTest extends TestCase
{

    public function testRun()
    {
        $this->assertEquals(1, (new Fibonacci())->run(1));
        $this->assertEquals(1, (new Fibonacci())->run(0));
        $this->assertEquals(1, (new Fibonacci())->run(2));
        $this->assertEquals(2, (new Fibonacci())->run(3));
        $this->assertEquals(34, (new Fibonacci())->run(9));
        $this->assertEquals(55, (new Fibonacci())->run(10));
    }
}
