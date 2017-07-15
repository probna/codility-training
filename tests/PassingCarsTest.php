<?php

namespace HcsOmot\Codility\Tests;

use HcsOmot\Codility\Lessons\PrefixSums\PassingCars;
use PHPUnit\Framework\TestCase;

class PassingCarsTest extends TestCase
{
    /**
     * @dataProvider provideAnArrayOfPassingCars
     */
    public function testFindNumberOfPairsOfPassingCars(array $arrayOfPassingCars, int $expectedNumberOfPairs)
    {
        $passingCarsObserver = new PassingCars();
        $this->assertEquals($expectedNumberOfPairs, $passingCarsObserver->findNumberOfPairsOfPassingCars($arrayOfPassingCars));
    }

    public function provideAnArrayOfPassingCars()
    {
        return [
          [[0, 1], 1], //one to the east, one to the west
          [[0, 1, 0, 1, 1], 5],
          [[1, 1, 0, 0, 1, 1, 0, 1], 7],
        ];
    }
}
