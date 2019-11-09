<?php

namespace BrainGames\games\calc;

use function BrainGames\engine\runEngine;

use const BrainGames\engine\ROUNDS_QTY;

const BRAIN_CALC_RULE = "What is the result of the expression?";
const MIN_VALUE = 1;
const MAX_VALUE = 100;
const OPERATIONS = ["+", "-", "*"];

define ("OPERATIONS_COUNT", count(OPERATIONS) - 1);

function run()
{
    runEngine(BRAIN_CALC_RULE, generateTasks(ROUNDS_QTY));
}

function generateTasks($roundsQty)
{
    for ($i = 1; $i <= $roundsQty; $i++) {
        $tasks[] = getQuestionAndAnswer();
    }
    return $tasks;
}

function getQuestionAndAnswer()
{
    $operation = OPERATIONS[rand(0, OPERATIONS_COUNT)];//ariphmetical operations +,-,*
    $a = rand(MIN_VALUE, MAX_VALUE);
    $b = rand(MIN_VALUE, MAX_VALUE);
    $result[] = strval($a) . " {$operation} " . strval($b);
    switch ($operation) {
        case "+":
            $result[] = strval($a + $b);
            break;
        case "-":
            $result[] = strval($a - $b);
            break;
        case "*":
            $result[] = strval($a * $b);
            break;
    }
    return $result;
}
