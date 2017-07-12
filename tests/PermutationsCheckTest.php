<?php

namespace HcsOmot\Codility\Tests;

use HcsOmot\Codility\Lessons\CountingElements\PermutationsCheck;
use PHPUnit\Framework\TestCase;

class PermutationsCheckTest extends TestCase
{
    /**
     * @dataProvider provideAPermutationArray
     */
    public function testIsArrayAPermutation(array $inputArray, int $expectedAnswer)
    {
        $permutationsChecker = new PermutationsCheck();

        $this->assertEquals($expectedAnswer, $permutationsChecker->isArrayAPermutation($inputArray));
    }

    public function provideAPermutationArray(): array
    {
        return [
            [[1, 2, 3], 1],
            [[1, 3, 2], 1],
            [[2, 1, 3], 1],
            [[2, 3, 1], 1],
            [[2, 3, 1, 4, 6, 5], 1],
            [[2, 3, 1, 4, 6, 7], 0],
            [[2, 3, 4, 6, 7, 13], 0],
            [[1], 1],
            [[], 0], // edge case
            [[1000000000], 0], // edge case
            [[2, 2, 2, 2, 2, 2, 2], 0], // multiple same elements
            [[2, 2], 0], // multiple same elements
            [[3, 3, 3], 0], // multiple same elements
            [[2, 3, 1, 4, 6, 5, 3], 0], // edge case - permutation + extra element
        ];
    }
}
