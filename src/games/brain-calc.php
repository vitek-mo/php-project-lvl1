<?php

namespace BrainGames\Games\BrainCalc;

use function BrainGames\Engine\runEngine;
use function BrainGames\Engine\getRoundsQty;

const BRAIN_CALC_RULES = "What is the result of the expression?";
const MIN_VALUE = 1;
const MAX_VALUE = 100;

function run()
{
    runEngine(BRAIN_CALC_RULES, generateTask(getRoundsQty()));
}

function generateTask($roundsQty)
{
    for ($i = 1; $i <= $roundsQty; $i++) {
        $entireTask[] = getQuestionAndAnswer();
    }
    return $entireTask;
}

function getQuestionAndAnswer()
{
    $operation = rand(1, 3);//ariphmetical operations +,-,*
    $a = rand(MIN_VALUE, MAX_VALUE);
    $b = rand(MIN_VALUE, MAX_VALUE);
    switch ($operation) {
        case 1:
            $result[] = strval($a) . " + " . strval($b);
            $result[] = strval($a + $b);
            break;
        case 2:
            $result[] = strval($a) . " - " . strval($b);
            $result[] = strval($a - $b);
            break;
        case 3:
            $result[] = strval($a) . " * " . strval($b);
            $result[] = strval($a * $b);
            break;
    }
    return $result;
}
