<?php

namespace Shapes;

class Calculator
{

    protected $shapes;

    public function __construct($shapes = [])
    {
        $this->shapes = $shapes;
    }

    /**
     * Get the total surface area of all shapes
     *
     * @param array $shapes
     * @return int
     * @throws Exception
     */
    public function surfaceArea(array $shapes)
    {
        $total = 0;
        foreach ($shapes as $shape) {
            if (is_object($shape)) {
                $total += $shape->area();
                continue;
            }
        }
        return $total;
    }

    /**
     * Get the total volume of all shapes
     * NOTE: Ignore any 2 dimensional shapes because 2D shapes don't have volume.
     *
     * @param array $shapes
     * @return int
     * @throws Exception
     */
    public function totalVolume(array $shapes)
    {
        $total = 0;
        foreach ($shapes as $shape) {
            if (is_object($shape) && method_exists($shape, 'volume')) {
                $total += $shape->volume();
                continue;
            }
        }
        return $total;
    }


}
