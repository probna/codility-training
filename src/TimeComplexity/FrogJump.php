<?php

namespace HcsOmot\Codility\Lessons\TimeComplexity;

class FrogJump
{
    public function jumpInIntervalFromStartToDestination(int $start, int $destination, int $jumpLength)
    {
        return ceil(($destination - $start) / $jumpLength);
    }
}
