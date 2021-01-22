<?php
require_once __DIR__ . '/../vendor/autoload.php';

$fizzbuzz = new \Katas\FizzBuzz(100);
var_dump($fizzbuzz->run());
