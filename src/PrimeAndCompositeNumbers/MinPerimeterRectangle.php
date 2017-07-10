<?php

namespace HcsOmot\Codility\Lessons\PrimeAndCompositeNumbers;

class MinPerimeterRectangle
{
    public function findPerimeterForArea(int $area)
    {
        $a = 1;

        $minPerim = 2 * (1 + $area);

        for (; $a <= $area; ++$a) {
            if ($area % $a !== 0) {
                continue;
            }

            $b = $area / $a;

            $perimeter = 2 * ($a + $b);

            if ($perimeter < $minPerim) {
                $minPerim = $perimeter;
            }
        }

        return $minPerim;
    }
}
