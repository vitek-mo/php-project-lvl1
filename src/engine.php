<?php

namespace BrainGames\engine;

use function cli\line;
use function cli\prompt;

const ROUNDS_QTY = 3;

function runEngine(string $rulesMessage, $task)
{
    line("Welcome to the Brain Games!");
    line($rulesMessage);
    line("");
    $name = prompt('May i have your name?');
    line("Hello, {$name}!");
    foreach ($task as [$question, $correctAnswer]) {
        line("Question: " . $question);
        $answer = prompt('Your answer ');
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
