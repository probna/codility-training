<?php

namespace HcsOmot\Codility\Lessons\StacksAndQueues;

class BracketsEvaluator
{
    public function isProperlyNested(string $stringOfBrackets)
    {
        if (strlen($stringOfBrackets) % 2 != 0) {
            return 0;
        }

        if (in_array($stringOfBrackets[0],['}', ']', ')'])) {
            return 0;
        }

        if (in_array($stringOfBrackets[strlen($stringOfBrackets) -1], ['{', '[', '('])) {
            return 0;
        }

        return 1;
    }
}
