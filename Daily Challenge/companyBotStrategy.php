<?php

function companyBotStrategy($t) {
    $r = array_filter($t, function($x) {
        return $x[1] == 1;
    });
    return array_sum(array_column($r,0)) / (count($r) == 0?1:count($r));
}


/*
Each CodeSignal Company Bot is trained by engineers from that specific company. 
The way it works is that a representative group of engineers from each company is identified as trainers before the bot goes live, 
and they CodeFight against the bot during a training phase. The current training algorithm is definitely more complex, but let's assume it works this way:

For each trainer we collect two pieces of information per task [answerTime, correctness], 
where correctness is 1 if the answer was correct, -1 if the answer was wrong, and 0 if no answer was given. In this case, 
the bot's correct answer time for a given task would be the average of the answer times from the trainers who answered correctly. 
Given all of the training information for a specific task, calculate the bot's answer time.

Example

For

trainingData = [[3, 1],
                [6, 1],
                [4, 1],
                [5, 1]]
the output should be companyBotStrategy(trainingData) = 4.5.

All four trainers have solved the task correctly, so the answer is (3 + 6 + 4 + 5) / 4 = 4.5.

*/
