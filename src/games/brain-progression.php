<?php

namespace BrainGames\Games\BrainProgression;

use function BrainGames\Engine\runEngine;

use const BrainGames\Engine\ROUNDS_QTY;

const BRAIN_PROGRESSION_RULES = "What number is missing in the progression?";
const MIN_VALUE = 1;
const MAX_VALUE = 100;
const RAND_START = 1;
const RAND_MAX = 20;
const RAND_STEP_MIN = 1;
const RAND_STEP_MAX = 20;
const PROGRESSION_LENGTH = 10;

function run()
{
    runEngine(BRAIN_PROGRESSION_RULES, generateTask(ROUNDS_QTY));
}

function generateTask($roundsQty)
{
    for ($i = 1; $i <= $roundsQty; $i++) {
        $progressionStart = rand(RAND_START, RAND_MAX);
        $step = rand(RAND_STEP_MIN, RAND_STEP_MAX);
        $hiddenIndex = rand(1, PROGRESSION_LENGTH);
        $question = "";
        
        for ($j = 1; $j <= PROGRESSION_LENGTH; $j++) {
            $question = $question . ($j === $hiddenIndex ? " .." : " " . strval($progressionStart + $step * ($j - 1)));
            if ($j === $hiddenIndex) {
                $answer = strval($progressionStart + $step * ($j - 1));
            }
        }
        $entireTask[] = [$question,$answer];
    }
    return $entireTask;
}
