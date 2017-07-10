<?php

namespace HcsOmot\Codility\Tests;

use HcsOmot\Codility\Lessons\PrimeAndCompositeNumbers\MinPerimeterRectangle;
use PHPUnit\Framework\TestCase;

class MinPerimeterRectangleTest extends TestCase
{
    /**
     * @dataProvider provideAnArrayOfRectangleAreas
     * @dataProvider provideAnArrayOfRectangleAreas2

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
            [20, 18],
            [25, 20],
        ];
    }

    /**
     * @dataProvider provideAnArrayOfRectangleAreas
     * @dataProvider provideAnArrayOfRectangleAreas2
     */
    public function testFindMinimalPerimeterRectangleFromAGivenArea2(int $area, int $expectedMinimalPerimeter)
    {
        $perimeterFinder = new MinPerimeterRectangle();

        $this->assertEquals($expectedMinimalPerimeter, $perimeterFinder->findPerimeterForArea2($area));
    }

    public function provideAnArrayOfRectangleAreas2()
    {
        return [
            [4, 8],
            [9, 12],
            [20, 18],
            [15, 16],
            [21, 20],
            [33, 28],
            [13, 28],
            [1, 4],
        ];
    }
}
