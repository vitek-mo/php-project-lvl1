<?php

namespace BrainGames\Games\BrainCalc;

use function BrainGames\Engine\runEngine;

use const BrainGames\Engine\ROUNDS_QTY;

const BRAIN_CALC_RULES = "What is the result of the expression?";
const MIN_VALUE = 1;
const MAX_VALUE = 100;

function run()
{
    runEngine(BRAIN_CALC_RULES, generateTask(ROUNDS_QTY));
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
    $operations = [" + ", " - ", " * "];
    $operation = $operations[rand(0, 2)];//ariphmetical operations +,-,*
    $a = rand(MIN_VALUE, MAX_VALUE);
    $b = rand(MIN_VALUE, MAX_VALUE);
    $result[] = strval($a) . $operation . strval($b);
    switch ($operation) {
        case " + ":
            $result[] = strval($a + $b);
            break;
        case " - ":
            $result[] = strval($a - $b);
            break;
        case " * ":
            $result[] = strval($a * $b);
            break;
    }
    return $result;
}
