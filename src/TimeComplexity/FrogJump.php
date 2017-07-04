<?php

namespace HcsOmot\Codility\Lessons\TimeComplexity;

class FrogJump
{
    public function jumpInIntervalFromStartToDestination(int $start, int $destination, int $jumpLength)
    {
        return (int) ceil(($destination - $start) / $jumpLength);
    }
}
