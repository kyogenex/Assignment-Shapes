<?php

namespace Shapes;

class Calculator
{
    /**
     * Get the total surface area of all shapes
     *
     * @param array $shapes
     * @return int
     */
    public function surfaceArea(array $shapes)
    {
        $total = 0;
        foreach ($shapes as $shape) {
            if (is_object($shape))
                $total += $shape->area();
        }
        return $total;
    }

    /**
     * Get the total volume of all shapes
     * NOTE: Ignore any 2 dimensional shapes because 2D shapes don't have volume.
     *
     * @param array $shapes
     * @return int
     */
    public function totalVolume(array $shapes)
    {
        $total = 0;
        foreach ($shapes as $shape) {
            if (is_object($shape))
                $total += $shape->volume();
        }
        return $total;
    }


}
