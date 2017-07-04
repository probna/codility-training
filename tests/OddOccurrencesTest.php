<?php

namespace HcsOmot\Codility\Tests;

require_once __DIR__.'/../vendor/autoload.php';

use HcsOmot\Codility\Lessons\Arrays\ArrayOddOccurrences;
use PHPUnit\Framework\TestCase;

class OddOccurrencesTest extends TestCase
{
    /**
     * @dataProvider provideArrayWithAnUnpairedElement
     */
    public function testFindUnpairedElementInArray(array $arrayWithAnUnpairedElement, int $unpairedElement)
    {
        $unpairedElementFinder = new ArrayOddOccurrences();

        $this->assertEquals($unpairedElement, $unpairedElementFinder->findUnpairedElementInArray($arrayWithAnUnpairedElement));
    }

    public function provideArrayWithAnUnpairedElement(): array
    {
        return [
            [[9, 3, 9, 3, 9, 7, 9], 7],
            [[1, 1, 2, 2, 1, 3, 1], 3],
            [[8, 8, 8, 8, 8, 8, 8, 8, 8], 8],
            [[1, 2, 1, 2, 1, 2, 1, 2, 1], 1],
            ];
    }
}
