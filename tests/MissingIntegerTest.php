<?php

namespace HcsOmot\Codility\Tests;

require_once __DIR__.'/../vendor/autoload.php';

use HcsOmot\Codility\Lessons\CountingElements\MissingInteger;
use PHPUnit\Framework\TestCase;

class MissingIntegerTest extends TestCase
{
    /**
     * @dataProvider provideAnArrayWithMissingInteger
     */
    public function testFindMissingIntegerInArray(array $inputArray, int $missingInteger)
    {
        $missingIntegerFinder = new MissingInteger();
        $this->assertEquals($missingInteger, $missingIntegerFinder->findMissingIntegerInArray($inputArray));
    }

    public function provideAnArrayWithMissingInteger(): array
    {
        return [
            [[1, 3], 2], //missing single element
            [[3, 1], 2], //missing single element, shuffle
            [[3, 4, 1], 2], //missing single element, shuffle
            [[1, 3, 4], 2], //missing single element
            [[1, 3, 6, 4, 1, 2], 5], //missing single element, shuffle + repetition
            [[2, 3], 1], //edge case: missing first element
            [[3, 2], 1], //edge case: missing first element, shuffle
            [[2, 2, 3, 3, 5, 5, 4, 4], 1], //edge case: missing first element + duplication
            [[2], 1], //edge case: single element
            [[-2], 1], //edge case: single element
            [[0], 1], //edge case: single element is zero
            [[-1, 3, -3, 2, -2], 1], //negative and positive numbers
            [[-1, -5, -3, -6, -2], 1], //negative numbers
            [[1], 2], //edge case: single element, 1
            [[1, 3, 4, 2, 9, 6, 7, 8], 5], //shuffled sequence
            [[1, 3, 4, 2, 9, 1, 7, 8], 5], //shuffled sequence with gap > 2, repetition
            [[0, 3, 4, 2, 9, 1, 7, 8], 5], //shuffled sequence with gap > 2, zero present
        ];
    }
}
