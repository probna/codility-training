<?php

namespace HcsOmot\Codility\Tests;

require_once __DIR__.'/../vendor/autoload.php';

use HcsOmot\Codility\Lessons\Arrays\ArrayOddOccurrences;
use PHPUnit\Framework\TestCase;

class OddOccurrencesTest extends TestCase
{
    /**
     * @dataProvider provideArrayOfUnpairedElements
     */
    public function testFindUnpairedElementInArray(array $unpairedArray, int $oddElement)
    {
        $unpairedElementFinder = new ArrayOddOccurrences();

        $this->assertEquals($oddElement, $unpairedElementFinder->findOddElement($unpairedArray));
    }

    public function provideArrayOfUnpairedElements(): array
    {
        return [[[9, 3, 9, 3, 9, 7, 9], 7]];
    }
}
