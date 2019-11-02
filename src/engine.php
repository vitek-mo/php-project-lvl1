<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

const ROUND_QTY = 3;

function getRoundsQty()
{
    return ROUND_QTY;
}

function runEngine(string $rulesMessage, $task)
{
    line("Welcome to the Brain Games!");
    line($rulesMessage);
    line("");
    $name = getName();
    line("Hello, {$name}!");
    for ($i = 0; $i < ROUND_QTY; $i++) {
        $question = $task[$i][0];
        $correctAnswer = $task[$i][1];
        line("Question: " . $question);
        $answer = prompt('Your answer: ');
        if ($answer === $correctAnswer) {
            line("Correct!");
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.");
            line("Let's try again, {$name}!");
            return;
        }
    }
    line("Congratulations, {$name}!");
}

function getName()
{
    return prompt('May i have your name?');
}
