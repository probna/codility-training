<?php

declare(strict_types=1);

namespace HcsOmot\Codility\Lessons\CountDiv;

class DivisionsCounter
{
    public function findNumberOfDividendsInRangeForDivisionWithPredefinedDivisor(
        int $rangeStart,
        int $rangeEnd,
        int $divisor
    ): int {
        return (int) floor($rangeEnd / $divisor) - (int) ceil($rangeStart / $divisor) + 1;
    }
}
