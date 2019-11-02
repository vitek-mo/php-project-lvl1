<?php

namespace BrainGames\Games\BrainEven;

use function BrainGames\Engine\runEngine;
use function BrainGames\Engine\getRoundsQty;

const BRAIN_EVEN_RULES = "Answer \"yes\" if the number is even, otherwise answer \"no\".";
const MIN_VALUE = 1;
const MAX_VALUE = 150;

function run()
{
    runEngine(BRAIN_EVEN_RULES, generateTask(getRoundsQty()));
}

function generateTask($roundsQty)
{
    for ($i = 1; $i <= $roundsQty; $i++) {
        $question = rand(MIN_VALUE, MAX_VALUE);
        $answer = ($question % 2 === 0) ? "yes" : "no";
        $entireTask[] = [$question,$answer];
    }
    return $entireTask;
}
