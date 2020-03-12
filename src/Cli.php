<?php

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;

function run($rules, $data)
{
    line("Welcome to the Brain Games!");
    line($rules);
    $name = prompt("May I have your name?");
    line("Hello, %s!", $name);
    line();

    foreach ($data as $roundData) {
        [$question, $correctAnswer] = $roundData;
        line("Question: ", $question);
        $answer = prompt("Your answer: ");
        if ($answer === $correctAnswer) {
            line("Correct!");
        } else {
            line("'", $answer, "' is wrong answer ;(. Correct answer was '", $correctAnswer, "'.");
            line("Let's try again, ", $name, "!");
            return false;
        }
    }
    line("Congratulations, ", $name, "!");
    return true;
}
