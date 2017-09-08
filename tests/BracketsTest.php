<?php

namespace HcsOmot\Codility\Tests;

use HcsOmot\Codility\Lessons\StacksAndQueues\BracketsEvaluator;
use PHPUnit\Framework\TestCase;

class BracketsTest extends TestCase
{
    /**
     * @dataProvider provideAStringOfBrackets
     * */
    public function testIsStringOfBracketsProperlyNested(string $stringOfBrackets, int $expectedStateOfString)
    {
        $bracketsEvaluator = new BracketsEvaluator();
        $this->assertEquals($expectedStateOfString, $bracketsEvaluator->isProperlyNested($stringOfBrackets));
    }

    public function provideAStringOfBrackets()
    {
        return [
          ['()', 1],
          ['[()]', 1],
          ['{[()]}', 1],

          ['{[()]{', 0], //edge case: trailing brace is facing the wrong way
          ['}[()]}', 0], //edge case: leading brace is facing the wrong way
          ['}[()]{', 0], //edge case: leading and trailing braces are facing the wrong way

          ['[{()}[', 0], //edge case: trailing bracket is facing the wrong way
          [']{()}]', 0], //edge case: leading bracket is facing the wrong way
          [']{()}[', 0], //edge case: leading and trailing brackets are facing the wrong way

          ['({()}(', 0], //edge case: trailing paren is facing the wrong way
          ['){()})', 0], //edge case: leading paren is facing the wrong way
          ['){()}(', 0], //edge case: leading and trailing parentheses are facing the wrong way
        ];
    }
}
