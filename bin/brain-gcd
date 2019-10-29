#!/usr/bin/php
<?php
namespace BrainGames\BrainGcd;
require __DIR__ . '/../vendor/autoload.php';

use function cli\line;
use function cli\prompt;
line("Welcome to the Brain Games!");
line("Find the greatest common divisor of given numbers.");
line("");
$name = prompt('May i have your name?');
line("Hello, %s!", $name);
$requiredCorrectAnswers = 3;
$randMax = 100;

for ($i = 1; $i <= $requiredCorrectAnswers; $i++) {
	$number1 = rand(1,$randMax);
	$number2 = rand(1,$randMax);
	line("Question: " . $number1 . " " . $number2);
	$answer = intval(prompt("Your answer: "));
	$correctAnswer = getAnswer($number1,$number2);
	if ($answer === $correctAnswer) {
		line("Correct!");
	} else {
		line("Question: " . $question);
		line("Your answer: " . $answer);
		line("'{$answer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.");
		line("Let's try again, {$name}!");
		return;
	}
}

function getAnswer($n1,$n2)
{
	for ($result = ($n1 < $n2)?$n1:$n2; $result > 0; $result--) {
		if (($n1 % $result === 0) && ($n2 % $result === 0)) {
			return $result;
		}
	}
}

line("Congratulations, {$name}!");
