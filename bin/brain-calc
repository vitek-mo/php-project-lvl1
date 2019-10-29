#!/usr/bin/php
<?php
namespace BrainGames\BrainCalc;
require __DIR__ . '/../vendor/autoload.php';

use function cli\line;
use function cli\prompt;
line("Welcome to the Brain Games!");
line("What is the result of the expression?");
line("");
$name = prompt('May i have your name?');
line("Hello, %s!", $name);
$requiredCorrectAnswers = 3;

for ($i = 1; $i <= $requiredCorrectAnswers; $i++) {
	$question = getQuestion();
	line("Question: " . $question);
	$answer = intval(prompt("Your answer: "));
	$correctAnswer = getAnswer($question);
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


function getQuestion()
{	
$randMin = 1;
$randMax = 50;
	$operation = rand(1,3);//ariphmetical operations +,-,*
	switch ($operation) {
		case 1:
			return rand($randMin,$randMax) . " + " . rand($randMin,$randMax);
		case 2:
			return rand($randMin,$randMax) . " - " . rand($randMin,$randMax);
		case 3:
			return rand($randMin,$randMax) . " * " . rand($randMin,$randMax);
	}
}

function getAnswer($qStr)
{
	$expression = explode(" ", $qStr);
	switch ($expression[1]) {
		case "+":
			return $expression[0] + $expression[2];
		case "-":
			return $expression[0] - $expression[2];
		case "*":
			return $expression[0] * $expression[2];
	}
}

line("Congratulations, {$name}!");
