<?php

namespace BrainGames\games\calc;

use function BrainGames\engine\runEngine;

use const BrainGames\engine\ROUNDS_QTY;

const BRAIN_CALC_RULE = "What is the result of the expression?";
const MIN_VALUE = 1;
const MAX_VALUE = 100;
const OPERATIONS = ["+", "-", "*"];

//define("OPERATIONS_COUNT", count(OPERATIONS) - 1);

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
    $answer = "";
    $operation = OPERATIONS[array_rand(OPERATIONS)]; //ariphmetical operations +,-,*
    //$operation = OPERATIONS[rand(0, )];
    $a = rand(MIN_VALUE, MAX_VALUE);
    $b = rand(MIN_VALUE, MAX_VALUE);
    $question = "{$a} {$operation} {$b}";
    switch ($operation) {
        case "+":
            $answer = strval($a + $b);
            break;
        case "-":
            $answer = strval($a - $b);
            break;
        case "*":
            $answer = strval($a * $b);
            break;
    }
    return [$question, $answer];
}
