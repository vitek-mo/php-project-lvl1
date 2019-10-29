#!/usr/bin/php
<?php
namespace BrainGames\BrainProgression;
require __DIR__ . '/../vendor/autoload.php';

use function cli\line;
use function cli\prompt;
line("Welcome to the Brain Games!");
line("What number is missing in the progression?");
line("");
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
	$randStart = 1;
	$randMax = 20;
	$randStepMin = 1;
	$randStepMax = 20;
	$progressionLength = 10;
	$progressionStart = rand($randStart,$randMax);
	$step = rand($randStepMin,$randStepMax);
	$hiddenElement = rand(1, $progressionLength);
	$result = ($hiddenElement == 1)?"..":strval($progressionStart);

	for ($i = 2; $i <= 10; $i++)
	{
		$result = $result . ($i === $hiddenElement?" ..":" " . strval($progressionStart + $step * ($i - 1)));
	}
	return $result;
}

function getCorrectAnswer(string $question):string
{
	$strNumbers = explode(" ", $question);
	$dotsIndex = array_search("..", $strNumbers);
	if (isset($strNumbers[$dotsIndex - 1]) && isset($strNumbers[$dotsIndex + 1])) {
		return ($strNumbers[$dotsIndex - 1] + (($strNumbers[$dotsIndex + 1] - $strNumbers[$dotsIndex - 1]) / 2));
	} elseif(isset($strNumbers[$dotsIndex + 1])) {
		return ($strNumbers[$dotsIndex + 1] - ($strNumbers[$dotsIndex + 2] - $strNumbers[$dotsIndex + 1]));
	} else {
		return $strNumbers[$dotsIndex - 1] + ($strNumbers[$dotsIndex - 1] - $strNumbers[$dotsIndex - 2]);
	}
}
