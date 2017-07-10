<?php

namespace HcsOmot\Codility\Lessons\PrimeAndCompositeNumbers;

class MinPerimeterRectangle
{
    public function findPerimeterForArea(int $area)
    {
        $a = 1;

        $minPerim = 2 * (1 + $area);

        for (; $a <= sqrt($area); ++$a) {
            if ($area % $a !== 0) {
                continue;
            }

            $b = $area / $a;

//            echo $a, ' ', $b, PHP_EOL;

            $perimeter = 2 * ($a + $b);

            if ($perimeter < $minPerim) {
                $minPerim = $perimeter;
            }
        }

        return $minPerim;
    }

    public function findPerimeterForArea2(int $area)
    {
        $a = floor(sqrt($area));

        for (; $a >= 1; --$a) {
            if ($area % $a !== 0) {
                continue;
            }

            $b     = $area / $a;
            $perim = 2 * ($a + $b);

            return $perim;
        }
    }
}
