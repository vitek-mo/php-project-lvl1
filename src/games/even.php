<?php

namespace BrainGames\games\even;

use function BrainGames\engine\runEngine;

use const BrainGames\engine\ROUNDS_QTY;

const BRAIN_EVEN_RULE = "Answer \"yes\" if the number is even, otherwise answer \"no\".";
const MIN_VALUE = 1;
const MAX_VALUE = 150;

function run()
{
    runEngine(BRAIN_EVEN_RULE, generateTasks(ROUNDS_QTY));
}

function generateTasks($roundsQty)
{
    for ($i = 1; $i <= $roundsQty; $i++) {
        $question = rand(MIN_VALUE, MAX_VALUE);
        $answer = isEven($question) ? "yes" : "no";
        $tasks[] = [$question, $answer];
    }
    return $tasks;
}

function isEven($number): bool
{
    return ($number % 2 === 0);
}
