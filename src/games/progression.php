<?php

namespace BrainGames\games\progression;

use function BrainGames\engine\runEngine;

use const BrainGames\engine\ROUNDS_QTY;

const BRAIN_PROGRESSION_RULE = "What number is missing in the progression?";
const MIN_VALUE = 1;
const MAX_VALUE = 100;
const RAND_START = 1;
const RAND_MAX = 20;
const RAND_STEP_MIN = 1;
const RAND_STEP_MAX = 20;
const LENGTH = 10;

function run()
{
    runEngine(BRAIN_PROGRESSION_RULE, generateTasks(ROUNDS_QTY));
}

function generateTasks($roundsQty)
{
    for ($i = 1; $i <= $roundsQty; $i++) {
        $start = rand(RAND_START, RAND_MAX);
        $step = rand(RAND_STEP_MIN, RAND_STEP_MAX);
        $hiddenValueIndex = rand(0, LENGTH - 1); //
        $question = "";
        
        for ($j = 0; $j < LENGTH; $j++) {
            $currentValue = $start + $step * $j;
            if ($j === $hiddenValueIndex) {
                $question = ($j === 0 ? ".." : "$question ..");
                $answer = "$currentValue";
            } else {
                $question = "$question $currentValue";
            }
        }
        $tasks[] = [$question, $answer];
    }
    return $tasks;
}
