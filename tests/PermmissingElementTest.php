<?php

namespace HcsOmot\Codility\Tests;

use HcsOmot\Codility\Lessons\TimeComplexity\PermmissingElement;
use PHPUnit\Framework\TestCase;

class PermmissingElementTest extends TestCase
{
    /**
     * @dataProvider provideAnArrayWithMissingLastElementOfSequence
     * @dataProvider provideAnArrayWithMissingFirstElementOfSequence
     * @dataProvider provideAnArrayWithMissingRandomElementOfARandomizedSequence
     */
    public function testPermmissingElementCanBeFound(array $arrayWithMissingElement, int $missingElement)
    {
        $permmissingElement = new PermmissingElement();

        $this->assertEquals($missingElement, $permmissingElement->findMissingElementInArrayUsingArrayDiff($arrayWithMissingElement));
        $this->assertEquals($missingElement, $permmissingElement->findMissingElementInArrayUsingArrayFilter($arrayWithMissingElement));
        $this->assertEquals($missingElement, $permmissingElement->findMissingElementInArrayUsingLoops($arrayWithMissingElement));
        $this->assertEquals($missingElement, $permmissingElement->findMissingElementInArrayUsingArraySorting($arrayWithMissingElement));
    }

    public function provideAnArrayWithMissingLastElementOfSequence(): array
    {
        return [
            [[1, 2, 3, 4, 5, 6, 7, 8, 9], 10],
        ];
    }

    public function provideAnArrayWithMissingFirstElementOfSequence(): array
    {
        return [
            [[2, 3, 4, 5, 6, 7, 8, 9, 10], 1],
        ];
    }

    public function provideAnArrayWithMissingRandomElementOfARandomizedSequence(): array
    {
        return [
            [[1, 3, 6, 2, 8, 10, 5, 7, 9], 4],
            [[4, 7, 6, 3, 9, 10, 2, 5, 1], 8],
            [[6, 10, 4, 3, 9, 1, 7, 2, 5], 8],
        ];
    }
}
