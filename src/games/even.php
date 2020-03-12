<?php

namespace BrainGames\even;

use function BrainGames\Cli\run;

function isEven($number)
{
    return $number % 2 === 0;
}

function gameEven($gameRepeatCount = 3)
{
    $rule = "Answer \"yes\" if the number is even, otherwise answer \"no\".";
    $data = [];

    for ($i = 0; $i < $gameRepeatCount; $i++) {
        $question = rand(1, 100);
        $correctAnswer = isEven($question) ? 'yes' : 'no';
        $data[] = [$question, $correctAnswer];
    }
    run($rule, $data);
}
