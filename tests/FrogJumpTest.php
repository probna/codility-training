<?php

namespace HcsOmot\Codility\Tests;

require_once __DIR__.'/../vendor/autoload.php';

use HcsOmot\Codility\Lessons\TimeComplexity\FrogJump;
use PHPUnit\Framework\TestCase;

class FrogJumpTest extends TestCase
{
    /**
     * @dataProvider provideJumpInfo
     */
    public function testIDontKnowItsName(int $startPosition, int $targetPosition, int $jumpLength, int $numberOfJumps)
    {
        $crazyFrog = new FrogJump();

        $this->assertEquals($numberOfJumps, $crazyFrog->jumpInIntervalFromStartToDestination($startPosition, $targetPosition, $jumpLength));
    }

    public function provideJumpInfo()
    {
        return [
                [10, 85, 30, 3],
            [10, 100, 30, 3],
        ];
    }
}
