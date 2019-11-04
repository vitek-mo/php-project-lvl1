<?php

namespace BrainGames\Games\BrainEven;

use function BrainGames\Engine\runEngine;
use const BrainGames\Engine\ROUNDS_QTY;

const BRAIN_EVEN_RULES = "Answer \"yes\" if the number is even, otherwise answer \"no\".";
const MIN_VALUE = 1;
const MAX_VALUE = 150;

function run()
{
    runEngine(BRAIN_EVEN_RULES, generateTask(ROUNDS_QTY));
}

function generateTask($roundsQty)
{
    for ($i = 1; $i <= $roundsQty; $i++) {
	$question = rand(MIN_VALUE, MAX_VALUE);
        $answer = isEven($question) ? "yes" : "no";
        $entireTask[] = [$question,$answer];
    }
    return $entireTask;
}

function isEven($number): bool
{
	return ($number % 2 === 0) ? true : false;
}
