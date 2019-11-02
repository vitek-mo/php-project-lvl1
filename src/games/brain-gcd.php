<?php

namespace BrainGames\Games\BrainGcd;

use function BrainGames\Engine\runEngine;
use function BrainGames\Engine\getRoundsQty;

const BRAIN_GCD_RULES = "Find the greatest common divisor of given numbers.";
const MIN_VALUE = 1;
const MAX_VALUE = 100;

function run()
{
    runEngine(BRAIN_GCD_RULES, generateTask(getRoundsQty()));
}

function generateTask($roundsQty)
{
    for ($i = 1; $i <= $roundsQty; $i++) {
        $number1 = rand(MIN_VALUE, MAX_VALUE);
        $number2 = rand(MIN_VALUE, MAX_VALUE);
        $question = strval($number1) . " " . strval($number2);
        $answer = strval(getAnswer($number1, $number2));
        $entireTask[] = [$question,$answer];
    }
    return $entireTask;
}

function getAnswer($n1, $n2)
{
    for ($result = ($n1 < $n2) ? $n1 : $n2; $result > 0; $result--) {
        if (($n1 % $result === 0) && ($n2 % $result === 0)) {
            return $result;
        }
    }
}
