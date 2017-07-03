<?php

namespace HcsOmot\Codility\Tests;

require_once __DIR__.'/../vendor/autoload.php';

use HcsOmot\Codility\Lessons\Iterations\BinaryGapCalculator;
use PHPUnit\Framework\TestCase;

class BinaryGapTest extends TestCase
{
    /**
     * @dataProvider binaryGap
     */
    public function testFindBinaryGapForInteger($integer, $binaryGap)
    {
        $binaryGapCalculator = new BinaryGapCalculator();

        $this->assertEquals($binaryGap, $binaryGapCalculator->findBinaryGapForInteger($integer));
    }

    public function binaryGap(): array
    {
        return [
            [9, 2],
            [529, 4],
            [20, 1],
            [15, 0],
            [1041, 5],
        ];
    }
}
