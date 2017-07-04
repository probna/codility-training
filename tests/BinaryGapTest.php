<?php

namespace HcsOmot\Codility\Tests;

require_once __DIR__.'/../vendor/autoload.php';

use HcsOmot\Codility\Lessons\Iterations\BinaryGapCalculator;
use PHPUnit\Framework\TestCase;

class BinaryGapTest extends TestCase
{
    /**
     * @dataProvider provideSizeOfBinaryGapForIntegers
     */
    public function testFindBinaryGapForInteger($integer, $binaryGapSize)
    {
        $binaryGapCalculator = new BinaryGapCalculator();

        $this->assertEquals($binaryGapSize, $binaryGapCalculator->findBinaryGapSizeForInteger($integer));
    }

    public function provideSizeOfBinaryGapForIntegers(): array
    {
        return [
            [9, 2], //1001
            [529, 4], //1000010001
            [20, 1], //10100
            [15, 0], //1111
            [1041, 5], //10000010001
        ];
    }
}
