<?php

namespace HcsOmot\Codility\Tests;

use HcsOmot\Codility\Lessons\PrimeAndCompositeNumbers\MinPerimeterRectangle;
use PHPUnit\Framework\TestCase;

class MinPerimeterRectangleTest extends TestCase
{
    /**
     * @dataProvider provideAnArrayOfRectangleAreas
     */
    public function testFindMinimalPerimeterRectangleFromAGivenArea(int $area, int $expectedMinimalPerimeter)
    {
        $perimeterFinder = new MinPerimeterRectangle();

        $this->assertEquals($expectedMinimalPerimeter, $perimeterFinder->findPerimeterForArea($area));
    }

    public function provideAnArrayOfRectangleAreas()
    {
        return [
            [1, 4],
            [2, 6],
            [3, 8],
            [4, 8],
            [30, 22],
        ];
    }
}
