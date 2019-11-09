<?php

namespace BrainGames\games\gcd;

use function BrainGames\engine\runEngine;

use const BrainGames\engine\ROUNDS_QTY;

const BRAIN_GCD_RULE = "Find the greatest common divisor of given numbers.";
const MIN_VALUE = 1;
const MAX_VALUE = 100;

function run()
{
    runEngine(BRAIN_GCD_RULE, generateTasks(ROUNDS_QTY));
}

function generateTasks($roundsQty)
{
    for ($i = 1; $i <= $roundsQty; $i++) {
        $number1 = rand(MIN_VALUE, MAX_VALUE);
        $number2 = rand(MIN_VALUE, MAX_VALUE);
        $question = strval($number1) . " " . strval($number2);
        $answer = strval(getGCD($number1, $number2));
        $tasks[] = [$question,$answer];
    }
    return $tasks;
}

function getGCD($n1, $n2)
{
    for ($result = ($n1 < $n2) ? $n1 : $n2; $result > 0; $result--) {
        if (($n1 % $result === 0) && ($n2 % $result === 0)) {
            return $result;
        }
    }
}
