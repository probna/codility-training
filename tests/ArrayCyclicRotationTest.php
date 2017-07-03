<?php

namespace HcsOmot\Codility\Tests;

use HcsOmot\Codility\Lessons\Arrays\ArrayCyclicRotation;
use PHPUnit\Framework\TestCase;

class ArrayCyclicRotationTest extends TestCase
{
    /**
     * @dataProvider  provideArrayForNumberOfCycleRotations
     */
    public function testCyclicRotation(array $inputArray, int $cycles, $expectedArray)
    {
        $cyclicRotator = new ArrayCyclicRotation();

        $this->assertEquals($expectedArray, $cyclicRotator->rotateArrayInCycles($inputArray, $cycles));
    }

    public function provideArrayForNumberOfCycleRotations()
    {
        return [
            [
                [1, 2, 3, 4, 5], 2, [4, 5, 1, 2, 3],
            ],
            [
                [1, 2, 3, 4, 5], 1, [5, 1, 2, 3, 4],
            ],
            [
                [1, 2, 3, 4, 5], 5, [1, 2, 3, 4, 5],
            ],
            [
                [1, 1, 1, 2, 2, 2], 3, [2, 2, 2, 1, 1, 1],
            ],
        ];
    }
}
