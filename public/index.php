<?php
require_once __DIR__ . '/../vendor/autoload.php';

$fizzbuzz = new \Katas\FizzBuzz(100);
var_dump($fizzbuzz->run());

$fibonacci = new \Katas\Fibonacci();
var_dump($fibonacci->run(30));
