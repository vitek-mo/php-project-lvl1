<?php

namespace BrainGames\Games\BrainPrime;

use function BrainGames\Engine\runEngine;
use function BrainGames\Engine\getRoundsQty;

const BRAIN_PRIME_RULES = "Answer \"yes\" if geven number is prime. Otherwise answer \"no\".";
const MIN_VALUE = 1;
const MAX_VALUE = 100;

function run()
{
    runEngine(BRAIN_PRIME_RULES, generateTask(getRoundsQty()));
}

function generateTask($roundsQty)
{
    for ($i = 1; $i <= $roundsQty; $i++) {
        $question = rand(MIN_VALUE, MAX_VALUE);
        $answer = (isPrime($question)) ? "yes" : "no";
        $entireTask[] = [$question,$answer];
    }
    return $entireTask;
}

function isPrime($number): bool
{
    if ($number === 1) {
        return false;
    }
    for ($i = $number - 1; $i > 1; $i--) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}
