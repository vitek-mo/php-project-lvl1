#!/usr/bin/php
<?php

/**
 * Game to define if number is prime or not.
 */

namespace BrainGames\BrainPrime;
require __DIR__ . '/../vendor/autoload.php';

use function cli\line;
use function cli\prompt;

line("Welcome to the Brain Games!");
line("Answer \"yes\" if geven number is prime. Otherwise answer \"no\".");

$name = prompt('May i have your name?');
line("Hello, %s!", $name);
$requiredCorrectAnswers = 3;

for ($i = 1; $i <= $requiredCorrectAnswers; $i++) {
    $question = getQuestion();
    line("Question: {$question}");
    $userAnswer = prompt("Your answer: ");
    $correctAnswer = getCorrectAnswer($question);
    if ($userAnswer === $correctAnswer) {
        line("Correct!");
    } else {
        line("'{$userAnswer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.");
        line("Let's try again, {$name}!");
        return;
    }
}
line("Congratulations, {$name}!");


function getQuestion()
{
    $randStart=1;
    $randMax = 100;
    return rand($randStart, $randMax);
}

function getCorrectAnswer($question)
{
    if (isPrime($question)) {
        return "yes";
    } else {
        return "no";
    }
}

function isPrime($number) : bool
{
	if ($number === 1) {
		return false;
	}
    for ($i = $number - 1; $i > 1; $i--) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}
