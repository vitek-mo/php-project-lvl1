<?php

namespace BrainGames\games\prime;

use function BrainGames\engine\runEngine;

use const BrainGames\engine\ROUNDS_QTY;

const BRAIN_PRIME_RULE = "Answer \"yes\" if geven number is prime. Otherwise answer \"no\".";
const MIN_VALUE = 1;
const MAX_VALUE = 100;

function run()
{
    runEngine(BRAIN_PRIME_RULE, generateTasks(ROUNDS_QTY));
}

function generateTasks($roundsQty)
{
    for ($i = 1; $i <= $roundsQty; $i++) {
        $question = rand(MIN_VALUE, MAX_VALUE);
        $answer = (isPrime($question)) ? "yes" : "no";
        $tasks[] = [$question,$answer];
    }
    return $tasks;
}

function isPrime($number): bool
{
    if ($number < 1) {
        return false;
    }
    
    for ($i = 2; $i <= $number / 2; $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}
