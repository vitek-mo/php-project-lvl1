#!/usr/bin/php
<?php
namespace BrainGames\BrainEven;
require __DIR__ . '/../vendor/autoload.php';
use function cli\line;
use function cli\prompt;
line("Welcome to the Brain Games!");
line("Answer \"yes\" if the number is even, otherwise answer \"no\".");
$name = prompt('May i have your name?');
line("Hello, %s!", $name);
$requiredCorrectAnswers = 3;
$randMin = 1;
$randMax = 150;
$questions = [];

for ($i = 1; $i <= $requiredCorrectAnswers; $i++) {
	$question = rand($randMin, $randMax);
	line("Question: " . $question);
	$answer = prompt('Your answer: ');
	$correctAnswer = ($question % 2 === 0)?'yes':'no';
	if ($answer === $correctAnswer) {
		line("Correct!");
	} else {
		line("'{$answer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.");
		line("Let's try again, {$name}!");
		return;
	}
}
line("Congratulations, {$name}!");
